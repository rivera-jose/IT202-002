<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
$results=[];
$user_id = get_user_id();
$stmt = $db->prepare("SELECT id, total_price, address, payment_method, money_received from Orders WHERE user_id = :uid ORDER BY created DESC LIMIT 10");
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

$results1=[];
if(empty(se($results, "id", "",false)))
{
    $order_id = 0;
}
else
{
    $order_id = $results[0]["id"];
}
$user_id = get_user_id();
$stmt1 = $db->prepare("SELECT Products.name, OrderItems.quantity, OrderItems.unit_price, (OrderItems.unit_price*OrderItems.quantity) as subtotal from OrderItems INNER JOIN Products on OrderItems.product_id = Products.id INNER JOIN Orders WHERE Orders.id = :oid");
try {
    $stmt1->execute([":oid" => $order_id ]);
    $r = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results1 = $r;
    }
    } catch (PDOException $e) {
        error_log(var_export($e, true));
        flash("Error fetching records", "danger");
    }

?>
<h1>Purchase History</h1>
<?php if (count($results) == 0) : ?>
    <p>No results to show</p>
<?php else : ?>
    <table class="table">
            <?php foreach ($results as $index => $record) : ?>
                <?php if ($index == 0) : ?>
                    <thead>
                        <?php foreach ($record as $column => $value) : ?>
                            <?php if (!($column == 'id')) : ?>
                                <th><?php se($column); ?></th>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <th>Actions</th>
                    </thead>
                    
                <?php endif; ?>
                <tr>
                    <?php foreach ($record as $column => $value) : ?>
                        <?php if (!($column == 'id')) : ?>
                            <td><?php se($value, null, "N/A"); ?></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <td>
                    <!-- other action buttons can go here-->
                    <a href="order-details.php?id=<?php se($record,"id"); ?>">Details</a>
                </td>
                </tr>
            <?php endforeach; ?>
        </table>
<?php endif; ?>
<?php
/*
Show the entire order details from the Order and OrderItems table (similar to cart)
Including a the cost of each line item and the total value
Show how they purchased and how much they paid
Displays a Thank you message
*/

?>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>