<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
error_log("add_to_cart received data: " . var_export($_REQUEST, true));

if (isset($_POST["add"])) {
    //insert or update item in user's cart
    $product_id = (int)se($_POST, "product_id", 0, false);
    $quantity = (int)se($_POST, "quantity", 0, false);
    $unit_price = (float)se($_POST, "unit_price", 0, false);
    if (isset($product_id) && $product_id !== 0 && $quantity > 0) 
    {
        $db = getDB();
        //note adding to cart doesn't verify price or quantity
        $stmt = $db->prepare("INSERT INTO Cart (product_id, quantity, user_id, unit_price) VALUES(:iid, :q, :uid, :up) ON DUPLICATE KEY UPDATE quantity = :q");
        $stmt->bindValue(":iid", $product_id, PDO::PARAM_INT);
        $stmt->bindValue(":q", $quantity, PDO::PARAM_INT);
        $stmt->bindValue(":uid", get_user_id(), PDO::PARAM_INT);
        $stmt->bindValue(":up", $unit_price, PDO::PARAM_STR);
        try {
            $stmt->execute();
            flash("successfully added to cart");
            } catch (PDOException $e) {
            error_log("Add to cart error: " . var_export($e, true));
        }
    }
    else{
        $user_id = get_user_id();

        $line_id = se($_REQUEST, "line_id", 0, false);
        if ($user_id > 0 && $line_id > 0) {
            $db = getDB();
            $stmt = $db->prepare("DELETE FROM Cart where id = :id and :uid");
            try {
                //added user_id to ensure the user can only delete their own items
                $stmt->execute([":id" => $line_id, ":uid" => $user_id]);
            } catch (PDOException $e) {
            error_log("Error deleting line item: " . var_export($e, true));
        }
     }
    }
}

if (isset($_POST["delete_one"])) {
    //delete single line item by Cart.id or Cart.product_id AND Cart.user_id
    $user_id = get_user_id();

    $line_id = se($_REQUEST, "line_id", 0, false);
    if ($user_id > 0 && $line_id > 0) {
        $db = getDB();
        $stmt = $db->prepare("DELETE FROM Cart where id = :id and :uid");
        try {
            //added user_id to ensure the user can only delete their own items
            $stmt->execute([":id" => $line_id, ":uid" => $user_id]);
        } catch (PDOException $e) {
        error_log("Error deleting line item: " . var_export($e, true));
    }
 }
}


if (isset($_POST["delete_all"])) {
    //delete all user's cart (only the user's items)
    $user_id = get_user_id();

    if ($user_id > 0) {
        $db = getDB();
        $stmt = $db->prepare("DELETE FROM Cart where user_id = :uid");
        try {
            //added user_id to ensure the user can only delete their own items
            $stmt->execute([":uid" => $user_id]);
        } catch (PDOException $e) {
    }
}
}



//TODO create lookup query and fetch results, set them to $results
$results=[];
$user_id = get_user_id();
if ($user_id > 0) {
    $db = getDB();
    $stmt = $db->prepare("SELECT name, c.id, product_id, quantity, c.unit_price, (c.unit_price*quantity) as subtotal FROM Cart c JOIN Products i on c.product_id = i.id WHERE c.user_id = :uid");
    try {
        $stmt->execute([":uid" => $user_id]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $total_cost = 0;
        foreach ($results as $row) {
            $total_cost += (float)se($row, "subtotal", 0, false);
        }
    } catch (PDOException $e) {
        error_log("Error fetching cart" . var_export($e, true));
    }
}

?>

<h1>Cart</h1>
<?php if (count($results) == 0) : ?>
    <p>No results to show</p>
<?php else : ?>
    <table class="table">
        <?php foreach ($results as $index => $record) : ?>
            <?php if ($index == 0) : ?>
                <thead>
                    <?php foreach ($record as $column => $value) : ?>
                        <?php if(!($column=='product_id' || $column=='id')) : ?>
                            <th><?php se($column); ?></th>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <th>Actions</th>
                </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <?php if(!($column=='product_id' || $column =='id')) : ?>
                        <td><?php se($value, null, "N/A"); ?></td>
                    <?php endif; ?>
                <?php endforeach; ?>
                <td>
                    <!-- other action buttons can go here-->
                    <form action="<?php echo get_url('cart.php'); ?>" method="POST">
                        <input type="hidden" name="line_id" value="<?php se($record, "id"); ?>" />
                        <input type="hidden" name="product_id" value="<?php se($record, "product_id"); ?>" />
                        <input type="hidden" name="unit_price" value="<?php se($record, "unit_price"); ?>" />
                        <input type="hidden" name="quantity" value="<?php se($record, "quantity"); ?>" />
                        <input type="quantity" name="quantity" value="<?php se($record, "quantity"); ?>"/>
                        <input type="submit" name="add" value="Update Qty"/>
                        <input type="submit" name= "delete_one" value="Delete" class="btn btn-info" />
                    </form>
                    <!-- TODO only show this if the user is admin -->
                    <?php if(has_role("Admin")) : ?>
                        <a href="admin/edit_item.php?id=<?php se($record, "product_id"); ?>">Edit</a>
                    <?php endif; ?>
                    <a href="products-details.php?id=<?php se($record, "product_id"); ?>">Details</a>
                    <br>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <form action="<?php echo get_url('cart.php'); ?>" method="POST">
       <input type="submit" name= "delete_all" value="Clear" class="btn btn-info" />
    </form>
    <form action="<?php echo get_url('order.php'); ?>" method="POST">
        <br>
        <div><h2>Shipping Address</h2> </div>
    <div class="mb-3">
        <label for="Street Address" class="form-label">Street Address</label>
        <input type="text" class="form-control" name="street_address">
    </div>
    <div class="mb-3">
        <label for="City" class="form-label">City</label>
        <input type="text" class="form-control" name="city">
    </div>
    <div class="mb-3">
        <label for="State" class="form-label">State</label>
        <input type="text" class="form-control" name="state"> 
    </div>
    <div class="mb-3">
        <label for="Zio Code" class="form-label">Zip Code</label>
        <input type="text" class="form-control" name="zip_code">
    </div>
    <div class="mb-3">
        <label for="Country" class="form-label">Country</label>
        <input type="text" class="form-control" name="country">
       
    </div>
    <div><h2>Checkout</h2> </div>
    <div><h4> Total: <?php se($total_cost); ?> </h4></div>
    <div class="input-group">
        <div class="input-group-text">Payment Method</div>
        <select class="bg-info" name="payment_method">
            <option value="Cash">Cash</option>
            <option value="MasterCard">MasterCard</option>
            <option value="Amex">Amex</option>
            <option value="Visa">Visa</option>
        </select>
        <input type="text" name="payment" placeholder="Payment Amount" />
        <br>
    </div>
    <br>
    <div>
        <input type="hidden" value="<?php se($total_cost) ?>" name="total_cost" />
        <input type="submit" name="purchase" value="Purchase" class="btn btn-info"/>
</form>
<?php endif; ?>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>