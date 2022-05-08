<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");
$TABLE_NAME = "Products";
if (!has_role("Admin") && !has_role("Shop Owner")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH/home.php"));
}
    $categories = array(['category' => 'out of stock']);

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

    $results = [];

    $db = getDB();
    
    $base_query = "SELECT id, name, description, category, stock, unit_price, visibility FROM $TABLE_NAME";
    $total_query = "SELECT count(1) AS total FROM $TABLE_NAME";
    
    $query=" WHERE 1=1";

    $params=[];

    if (!empty($name)) {
        $query .= " AND name like :name";
        $params[":name"] = "%$name%";
    }

    if ($category !== 'all') {
        $query .= " AND stock <= :cat ";
        $params[":cat"] = 0;
    }
    
    //paginate function
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
<div class="container-fluid">
    <h1>List Items</h1>
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
            <div class="input-group-text">Search Filter</div>
            <input class="form-control" name="name" value="<?php se($name); ?>" />
        </div>
    </div>
    <div class="col">
        <div class="input-group">
            <input type="submit" class="btn btn-primary" value="Search" />
        </div>
    </div>
</form>
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
                        <a href="edit_item.php?id=<?php se($record, "id"); ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</div>
<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/pagination.php");
require_once(__DIR__ . "/../../../partials/flash.php");