<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);


$payment_method = se($_POST, "payment_method", "Cash", false);

//allowed list
if (!in_array($payment_method, ["Cash", "MasterCard", "Amex", "Visa"])) {
    $col = "Cash"; //default value, prevent sql injection
}

//get address
$street_address = se($_POST, "street_address", "", false);
$city = se($_POST, "city", "", false);
$state = se($_POST, "state", "", false);
$zip_code =se($_POST, "zip_code", "", false);
$country = se($_POST, "country", "", false);

$hasError=false;

//verifying Address
if(empty($street_address))
{
    flash("street address must be filled out for delivery");
    $hasError = True;
}
if(empty($city))
{
    flash("city must be filled out for delivery");    
    $hasError = True;
}
if(empty($state))
{
    flash("state must be filled out for delivery");    
    $hasError = True;
}
if(empty($zip_code))
{
    flash("zip code must be filled out for delivery");    
    $hasError = True;
}
if(empty($country))
{
    flash("country must be filled out for delivery");    
    $hasError = True;
}

//concatenate address info
$address = $street_address . ", " .  $city ." " . $state . ", " . $zip_code . " " . $country;

//get payment amount
$payment = se($_POST, "payment", "", false);


//verify payment amount
if(empty($payment))
{
    flash("you must enter payment amount in order to purchase"); 
    $hasError = True;
}


//validate payment amount
if(!is_valid_currency($payment))
{
    flash("you must enter valid payment"); 
    $hasError = True;
}


//get cart total cost
$total_cost = se($_POST, "total_cost", "", false);

if(!(abs(($payment-$total_cost)/$total_cost) < 0.00001))
{
    flash("you must enter an amount equal to the total");
    $hasError = True;

}

if (isset($_POST["purchase"])) {
//get payment method

if(!$hasError)
{
    /*
        Calculate Cart Items
        Verify the current product price against the Products table
        Since our Cart is table-based it can be long lived so if a user added a Product at a sale and they attempt to purchase afterwards, it should pull the true Product cost.
        You can also show the Cart.unit_price vs Product.unit_price to show a sale or an increase in price
        Verify desired product and desired quantity are still available in the Products table
        Users can’t purchase more than what’s in stock
        Show an error message and prevent order from going through if something isn’t available
        Let the user update their cart and try again
        Clearly show what the issue is (which product isn’t available, how much quantity is available if the cart exceeds it)
        Make an entry into the Orders table Get last Order ID from Orders table
        Copy the cart details into the OrderItems tables with the Order ID from the previous step
        Update the Products table Stock for each item to deduct the Ordered Quantity
        Clear out the user’s cart after successful order
        Redirect user to Order Confirmation Page
        */
        $user_id = get_user_id();
        if ($user_id > 0) {
            $db = getDB();
            //$stmt = $db->prepare("SELECT name, c.id as line_id, product_id, quantity, c.unit_price, (c.unit_price*quantity) as subtotal FROM Cart c JOIN Products i on c.product_id = i.id WHERE c.user_id = :uid");
            $stmt1 = $db->prepare("INSERT INTO Orders (user_id, total_price, address, payment_method, money_received) VALUES (:uid, :tp, :addr, :pm, :mr)");
            try {
                //$stmt->execute([":uid" => $user_id]);
                //$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $payment = (float)$payment;
                
                
                $stmt1->execute([":uid" => $user_id,":tp" => $total_cost, 
                ":addr" => $address,":pm" => $payment_method,":mr" => $payment]);
                //checks if payment equals total cost
                if (abs(($payment-$total_cost)/$total_cost) < 0.00001) { 
                    //can purchase
                    $next_order_id = 0;
                    //get next order id
                    $next_order_id = $db->lastInsertId();

                    //map cart to order history
                    if ($next_order_id > 0) {
                        $stmt = $db->prepare("INSERT INTO OrderItems (product_id, quantity, unit_price, order_id) 
                        SELECT product_id, Cart.quantity, Cart.unit_price, :order_id FROM Cart JOIN Products on Cart.product_id = Products.id
                        WHERE Cart.user_id = :uid");
                        try {
                            $stmt->execute([":uid" => $user_id, ":order_id" => $next_order_id]);
                        } catch (PDOException $e) {
                            error_log("Error mapping cart data to order history: " . var_export($e, true));
                            $next_order_id = 0; //using as a controller
                        }
                    }
                    
                    //deduct product stock (used to determine if out of stock as it'll fail with a constraint violation)
                    if ($next_order_id > 0) {
                        $stmt = $db->prepare("UPDATE Products 
                        set stock = stock - (select IFNULL(quantity, 0) FROM Cart WHERE product_id = Products.id and user_id = :uid) 
                        WHERE id in (SELECT product_id from Cart where user_id = :uid)");
                        try {
                            $stmt->execute([":uid" => $user_id]);
                        } catch (PDOException $e) {
                            error_log("Update stock error: " . var_export($e, true));
                            flash("There is not enough products in stock available for purchase");
                            $next_order_id = 0; //using as a controller
                        }
                    }
                    //update inventory
                    //TBD
                    //clear the user's cart now that the process is done
                    if ($next_order_id > 0) {
                        $stmt =  $db->prepare("DELETE from Cart where user_id = :uid");
                        try {
                            $stmt->execute([":uid" => $user_id]);
                        } catch (PDOException $e) {
                            error_log("Error deleting cart: " . var_export($e, true));
                            $next_order_id = 0; // using as a controller
                        }
                    }
                    
                } 
            } catch (PDOException $e) {
                error_log("Error fetching cart" . var_export($e, true));
            }
        }
    }
}
$db = getDB();
$results=[];
$user_id = get_user_id();
$stmt = $db->prepare("SELECT total_price, address, payment_method, money_received from Orders WHERE user_id = :uid ORDER BY created DESC LIMIT 1");
try {
    $stmt->execute([":uid" => $user_id ]);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
    } catch (PDOException $e) {
        error_log(var_export($e, true));
        flash("Error fetching records", "danger");
    }

?>

<h1>Order Page</h1>
<?php if (count($results) == 0) : ?>
    <p>No results to show</p>
<?php else : ?>
    <table class="table">
            <?php foreach ($results as $index => $record) : ?>
                <?php if ($index == 0) : ?>
                    <thead>
                        <?php foreach ($record as $column => $value) : ?>
                            <th><?php se($column); ?></th>
                        <?php endforeach; ?>
                    </thead>
                <?php endif; ?>
                <tr>
                    <?php foreach ($record as $column => $value) : ?>
                        <td><?php se($value, null, "N/A"); ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </table>
        <form action="<?php echo get_url('confirmation.php'); ?>" method="POST">
        <input type="submit" value="Complete Purchase" class="btn btn-info"/>
    </form>
<?php endif; ?>


<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>