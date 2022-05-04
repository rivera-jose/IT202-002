<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
$results=[];
$user_id = get_user_id();
if (!has_role("Shop Owner")) {
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
}
else {
        //$stmt = $db->prepare("SELECT id, total_price, address, payment_method, money_received from Orders ORDER BY created DESC LIMIT 10");
        $stmt = $db->prepare("SELECT i.username, o.id, o.total_price, o.address, o.payment_method, o.money_received FROM Orders o INNER JOIN Users i on o.user_id = i.id ORDER BY o.created DESC LIMIT 10");
    try {
        $stmt->execute([]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        error_log(var_export($e, true));
        flash("Error fetching records", "danger");
    }
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