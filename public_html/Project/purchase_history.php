<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
$results=[];
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
$results = [];

//process filters/sorting
//Sort and Filters
$col = se($_GET, "col", "total", false);
//allowed list
if (!in_array($col, ["total_price", "o.created"])) {
    $col = "created"; //default value, prevent sql injection
}

$order = se($_GET, "order", "asc", false);

//allowed list
if (!in_array($order, ["asc", "desc"])) {
    $order = "asc"; //default value, prevent sql injection

}

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

//get start and end range
$start = se($_GET, "start", date("Y-m-d", strtotime("-1 month")),false);
$end = se($_GET, "end", date("Y-m-d"), false);


$user_id = get_user_id();
if (!has_role("Shop Owner")) {
    $base_query = "SELECT DISTINCT o.id, o.total_price, o.address, o.payment_method, o.money_received, o.created as date_purchased FROM Orders o JOIN OrderItems i 
    ON o.id = i.order_id JOIN Products p ON i.product_id = p.id";

    $total_query = "SELECT count(1) AS total FROM Orders o JOIN OrderItems i 
    ON o.id = i.order_id JOIN Products p ON i.product_id = p.id";

    $query= " WHERE 1=1 AND o.user_id = :uid";

    


    $params = []; //define default params, add keys as needed and pass to execute
    
    $params[":uid"] = $user_id;
    if ($category !== 'all') {
        $query .= " AND p.category = :cat";
        $params[":cat"] = "$category";
    }

    if($start)
    {
        $query .= " AND o.created >= :start";
        $params[":start"] = $start;
    }
    if($end)
    {
        $query .= " AND o.created <= :end";
        $params[":end"] = date("Y-m-d 23:59:59", strtotime($end));
    }

    //apply column and order sort
    if (!empty($col) && !empty($order)) {
        $query .= " ORDER BY o.$col $order"; //be sure you trust these values, I validate via the in_array checks above
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
    $result1=[];
    try{
        $stmt->execute($params);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($r)
        {
            $result1=$r;
        }

    } catch(PDOException $e){
        error_log(var_export($e,true));
        flash("Error fetching items", "danger");
    }

}
else {
        //$stmt = $db->prepare("SELECT id, total_price, address, payment_method, money_received from Orders ORDER BY created DESC LIMIT 10");
        $base_query = "SELECT DISTINCT i.username, o.id, o.total_price, o.address, o.payment_method, 
        o.money_received, o.created as date_purchased FROM Orders o JOIN Users i on o.user_id = i.id JOIN OrderItems j 
        ON o.id = j.order_id JOIN Products p ON j.product_id = p.id";

        $total_query = "SELECT count(1) AS total FROM Orders o JOIN Users i on o.user_id = i.id 
        JOIN OrderItems j ON o.id = j.order_id JOIN Products p ON j.product_id = p.id";

        $query = " WHERE 1=1";

        $params = []; //define default params, add keys as needed and pass to execute

        if ($category !== 'all') {
            $query .= " AND p.category = :cat";
            $params[":cat"] = "$category";
        }
    
        if($start)
        {
            $query .= " AND o.created >= :start";
            $params[":start"] = $start;
        }
        if($end)
        {
            $query .= " AND o.created <= :end";
            $params[":end"] = date("Y-m-d 23:59:59", strtotime($end));
        }
    
        //apply column and order sort
        if (!empty($col) && !empty($order)) {
            $query .= " ORDER BY o.$col $order"; //be sure you trust these values, I validate via the in_array checks above
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
    $result1=[];
    try{
        $stmt->execute($params);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if($r)
        {
            $result1=$r;
        }

    } catch(PDOException $e){
        error_log(var_export($e,true));
        flash("Error fetching items", "danger");
    }
        
        $grand_total = 0;
        foreach ($result1 as $row) {
            $grand_total += (float)se($row, "total_price", 0, false);
        }
}
?>
<h1>Purchase History</h1>
<?php if (count($result1) == 0) : ?>
    <p>No results to show</p>
<?php else : ?>
    <!-- Jose's Form-->
<form class="row row-cols-auto g-3 align-items-center">
    <span class="input-group-text" id="start-date">Start</span>
    <input name="start" type="date" class="form-control" placeholder="mm-dd-yy" aria-label="start-date" aria-describedby="start-date" value="<?php se($start); ?>">
    <span class="input-group-text" id="end-date">End</span>
    <input name="end" type="date" class="form-control" placeholder="mm-dd-yy" aria-label="end-date" aria-describedby="end-date" value="<?php se($end); ?>">

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
        <div class="input-group">
            <div class="input-group-text">Sort</div>
            <!-- make sure these match the in_array filter above-->
            <select class="form-control bg-info" name="col" value="<?php se($col); ?>" data="took">
                <option value="total_price">Total</option>
                <option value="created">Date Purchased</option>
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
    <table class="table">
            <?php foreach ($result1 as $index => $record) : ?>
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
        <?php if(has_role("Shop Owner")) : ?>
            <div><h4> Total: <?php se($grand_total); ?> </h4></div>
        <?php endif; ?>
        
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
require(__DIR__ . "/../../partials/pagination.php");
require_once(__DIR__ . "/../../partials/flash.php");
?>