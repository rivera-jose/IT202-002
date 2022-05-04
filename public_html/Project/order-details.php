<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
$results=[];
$order_id = se($_GET, "id", -1, false);
$user_id = get_user_id();
$stmt = $db->prepare("SELECT name, o.product_id, o.quantity, o.unit_price, (o.unit_price*o.quantity) as subtotal 
FROM OrderItems o JOIN Products i on o.product_id = i.id WHERE o.order_id = :oid");
try {
    $stmt->execute([":oid" => $order_id ]);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
    $total_cost = 0;
    foreach ($results as $row) {
        $total_cost += (float)se($row, "subtotal", 0, false);
    }
    } catch (PDOException $e) {
        error_log(var_export($e, true));
        flash("Error fetching records", "danger");
    }

?>
<h2>Order Item's Details</h2>
<?php if (count($results) == 0) : ?>
    <p>No results to show</p>
<?php else : ?>
        <table class="table">
            <?php foreach ($results as $index => $record) : ?>
                <?php if ($index == 0) : ?>
                    <thead>
                        <?php foreach ($record as $column => $value) : ?>
                            <?php if (!($column == 'product_id')) : ?>
                                <th><?php se($column); ?></th>
                                <?php endif; ?>
                        <?php endforeach; ?>
                        <?php if (has_role("Shop Owner") ) : ?>
                            <th>Actions</th>
                            <?php endif; ?>
                    </thead>
                <?php endif; ?>
                <tr>
                    <?php foreach ($record as $column => $value) : ?>
                        <?php if (!($column == 'product_id')) : ?>
                        <td><?php se($value, null, "N/A"); ?></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <?php if (has_role("Shop Owner") ) : ?>
                        <td>
                            <!-- other action buttons can go here-->
                            <a href="admin/edit_item.php?id=<?php se($record,"product_id"); ?>">Edit</a>
                        </td>
                        <?php endif; ?>
                    </tr>
            <?php endforeach; ?>
        </table>
<?php endif; ?>
<div><h2> Total: <?php se($total_cost); ?> </h2></div>
<?php

?>

<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>