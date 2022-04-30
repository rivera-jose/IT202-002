<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
error_log("add_to_cart received data: " . var_export($_REQUEST, true));

if (isset($_POST["add"])) {
    //insert or update item in user's cart
    $product_id = (int)se($_POST, "product_id", 0, false);
    $quantity = (int)se($_POST, "quantity", 0, false);
    $unit_price = (float)se($_POST, "unit_price", 0, false);
    if (isset($product_id) && $product_id !== 0 && $quantity > 0) {
        $db = getDB();
        //note adding to cart doesn't verify price or quantity
        $stmt = $db->prepare("INSERT INTO Cart (product_id, quantity, user_id, unit_price) VALUES(:iid, :q, :uid, :up) ON DUPLICATE KEY UPDATE quantity = quantity + :q");
        $stmt->bindValue(":iid", $product_id, PDO::PARAM_INT);
        $stmt->bindValue(":q", $quantity, PDO::PARAM_INT);
        $stmt->bindValue(":uid", get_user_id(), PDO::PARAM_INT);
        $stmt->bindValue(":up", $unit_price, PDO::PARAM_STR);
        try {
            $stmt->execute();
            } catch (PDOException $e) {
            error_log("Add to cart error: " . var_export($e, true));
        }
    }
}

if (isset($_POST["delete_one"])) {
    //delete single line item by Cart.id or Cart.product_id AND Cart.user_id
}
if (isset($_POST["delete_all"])) {
    //delete all user's cart (only the user's items)
}

$results=[];

//TODO create lookup query and fetch results, set them to $results
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
                        <th><?php se($column); ?></th>
                    <?php endforeach; ?>
                    <th>Actions</th>
                </thead>
            <?php endif; ?>
            <tr>
                <?php foreach ($record as $column => $value) : ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>
                <td>
                    <!-- other action buttons can go here-->
                    <form action="<?php echo get_url('order.php'); ?>" method=" POST">
                        <input type="submit" value="Buy Me" class="btn btn-info" />
                    </form>
                    <!-- TODO only show this if the user is admin -->
                    <a href="<?php echo get_url('admin/edit_product.php?id=') . se($record, "id"); ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
?>