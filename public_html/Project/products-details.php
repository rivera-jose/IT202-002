<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");
$TABLE_NAME = "Products";
//get the table definition
$result = [];
//echo "<pre>" . var_export($columns, true) . "</pre>";
$db = getDB();
//get the item
$id = se($_GET, "id", -1, false);
$stmt = $db->prepare("SELECT name, description, category, stock, unit_price FROM $TABLE_NAME where id =:id");
try {
    $stmt->execute([":id" => $id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error looking up record", "danger");
}
 //echo "<pre>" . var_export($result, true) . "</pre>";
?>

<div class="container-fluid">
    <h1>Product Details</h1>
    <?php if (count($result) == 0) : ?>
        <p>No results to show</p>
    <?php else : ?>
        <table class="table">
            <thead>
                <?php foreach ($result as $column => $value) : ?>
                    <th><?php se($column); ?></th>
                <?php endforeach; ?>
            </thead>
            <tr>
                <?php foreach ($result as $column => $value) : ?>
                    <td><?php se($value, null, "N/A"); ?></td>
                <?php endforeach; ?>
            </tr>
        </table>
        <?php if(has_role("Admin")) : ?>
                <a href="admin/edit_item.php?id=<?php se($id); ?>">Edit</a>
            <?php endif; ?>
    <?php endif; ?>
</div>
<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../partials/flash.php");
?>