<?php
require(__DIR__ . "/../../partials/nav.php");
//get categories
$db = getDB();
$query1 = "SELECT distinct category FROM Products";
$stmt1 = $db->prepare($query1); //dynamically generated query
try {
    $stmt1->execute(); //dynamically populated params to bind
    $r1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    if ($r1) {
        $categories = $r1;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching items", "danger");
}
//end get categories
$results = [];

//process filters/sorting
//Sort and Filters
$col = se($_GET, "col", "unit_price", false);
//allowed list
if (!in_array($col, ["unit_price", "stock", "name", "created"])) {
    $col = "unit_price"; //default value, prevent sql injection
}
$order = se($_GET, "order", "asc", false);
//allowed list
if (!in_array($order, ["asc", "desc"])) {
    $order = "asc"; //default value, prevent sql injection
}
//get name partial search
$name = se($_GET, "name", "", false);
//var_export($categories);

//get category search
$category = se($_GET, "category", "all", false);

$check = [];
foreach($categories as $c){
  $cat = $c["category"];
  if(!in_array($cat, $check)){
    array_push($check, $cat);
  }
}
if (!in_array($category, $check)) {
    $category = 'all';
}

//dynamic query
$base_query = "SELECT id, name, description, category, unit_price, stock FROM Products"; //1=1 shortcut to conditionally build AND clauses
$total_query = "SELECT count(1) AS total FROM Products";

$query = " WHERE visibility > 0 and stock > 0";


$params = []; //define default params, add keys as needed and pass to execute
//apply name filter
if (!empty($name)) {
    $query .= " AND name like :name";
    $params[":name"] = "%$name%";
}

if ($category !== 'all') {
    $query .= " AND category = :cat";
    $params[":cat"] = "$category";
}


//apply column and order sort
if (!empty($col) && !empty($order)) {
    $query .= " ORDER BY $col $order"; //be sure you trust these values, I validate via the in_array checks above
} 



//paginate
$per_page=10;
paginate($total_query . $query, $params, $per_page);

$query .= " LIMIT :offset, :count";
$params[":offset"]= $offset;
$params[":count"]= $per_page;
$stmt = $db->prepare($base_query . $query);
foreach($params as $key => $value){
    $type = is_int($value) ? PDO::PARAM_INT :PDO::PARAM_STR;
    $stmt->bindValue($key,$value,$type);
}

$params = null;
$results=[];
try{
    $stmt->execute($params);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($r)
    {
        $results=$r;
    }

} catch(PDOException $e){
    error_log(var_export($e,true));
    flash("Error fetching items", "danger");
}

?>
<!-- Jose's Form-->
<form class="row row-cols-auto g-3 align-items-center">
    <div class="col">
        <div class="input-group" data="i">
            <div class="input-group-text">Filter</div>
            <select class="form-control bg-info" name="category" data="took">
                <?php foreach ($categories as $item1) : ?>
                    <option value="<?php se($item1, "category"); ?>"><?php se($item1, "category"); ?></option>
                <?php endforeach; ?>
            </select>
            <script>
                document.forms[0].category.value = "<?php se($category); ?>";
            </script>
        </div>
    </div>
    <div class="col">
        <div class="input-group" data="i">
            <div class="input-group-text">Name</div>
            <input class="form-control" name="name" value="<?php se($name); ?>" />
        </div>
    </div>
    <div class="col">
        <div class="input-group">
            <div class="input-group-text">Sort</div>
            <!-- make sure these match the in_array filter above-->
            <select class="form-control bg-info" name="col" value="<?php se($col); ?>" data="took">
                <option value="unit_price">Unit Price</option>
                <option value="stock">Stock</option>
                <option value="name">Name</option>
                <option value="created">Created</option>
            </select>
            <script>
                //quick fix to ensure proper value is selected since
                //value setting only works after the options are defined and php has the value set prior
                document.forms[0].col.value = "<?php se($col); ?>";
            </script>
            <select class="form-control" name="order" value="<?php se($order); ?>">
                <option class="bg-white" value="asc">Up</option>
                <option class="bg-white" value="desc">Down</option>
            </select>
            <script data="this">
                //quick fix to ensure proper value is selected since
                //value setting only works after the options are defined and php has the value set prior
                document.forms[0].order.value = "<?php se($order); ?>";
                if (document.forms[0].order.value === "asc") {
                    document.forms[0].order.className = "form-control bg-success";
                } else {
                    document.forms[0].order.className = "form-control bg-danger";
                }
            </script>
        </div>
    </div>
    <div class="col">
        <div class="input-group">
            <input type="submit" class="btn btn-primary" value="Apply" />
        </div>
    </div>
</form>
<!-- end form -->
<div class="container-fluid">
    <h1>Shop</h1>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php foreach ($results as $item) : ?>
            <div class="col">
                <div class="card bg-light">
                    <div class="card-header">
                        Shop Placeholder
                    </div>
                    <?php if (se($item, "image", "", false)) : ?>
                        <img src="<?php se($item, "image"); ?>" class="card-img-top" alt="...">
                    <?php endif; ?>

                    <div class="card-body">
                        <h5 class="card-title">Name: <?php se($item, "name"); ?></h5>
                        <p class="card-text">Description: <?php se($item, "description"); ?></p>
                        <p class="card-text">Category: <?php se($item, "category"); ?></p>
                        <p class="card-text">Unit Price: <?php se($item, "unit_price"); ?>
                    </div>
                    <div class="card-footer">
                        <?php if ((is_logged_in())) : ?>
                            <form action="<?php echo get_url('cart.php'); ?>" method="POST">
                                <input type="hidden" name="product_id" value="<?php se($item, "id"); ?>" />
                                <input type="hidden" name="unit_price" value="<?php se($item, "unit_price"); ?>" />
                                <input type="quantity" name="quantity" value="1" />
                                <input type="submit" name="add" value="Add to Cart" class="btn btn-info" />
                            </form>
                        <?php endif; ?>
                        <a href="products-details.php?id=<?php se($item, "id"); ?>">Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/pagination.php");
require(__DIR__ . "/../../partials/flash.php");
?>