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
 if (isset($_POST["rate"])) 
 {
    //get rating, comments, user_id variables
    $rating = (int)se($_POST, "rating_number", 0, false);
    $comment = se($_POST, "comment", "", false);
    $hasError=false;

    //validate rating
    if(empty($rating))
    {
        flash("you must enter a rating number in order to rate");
        $hasError=true;
    }
    if(empty($comment))
    {
        flash("you must enter a comment in order to rate");
        $hasError=true;
    }

    //echo 'rating: ' . $rating . '<br>' . 'comment: <br>' . $comment;
        if(!$hasError)
        {
            $db = getDB();
            //note adding to cart doesn't verify price or quantity
            $stmt = $db->prepare("INSERT INTO Ratings (product_id, user_id, rating, comment) VALUES(:iid, :uid, :r, :c)");
            $stmt->bindValue(":iid", $id, PDO::PARAM_INT);
            $stmt->bindValue(":uid", get_user_id(), PDO::PARAM_INT);
            $stmt->bindValue(":r", $rating, PDO::PARAM_INT);
            $stmt->bindValue(":c", $comment, PDO::PARAM_STR);
            try {
                $stmt->execute();
                flash("successfully added to ratings");
            } catch (PDOException $e) {
                error_log("Add to Ratings error: " . var_export($e, true));
        } 
    }
 }    
    // get the the most recent reviews
    $base_query= "SELECT u.username, r.rating, r.comment FROM Ratings r JOIN Users u ON r.user_id = u.id";
    $total_query = "SELECT count(1) AS total FROM Ratings";

    $query=" WHERE product_id = :pid";
    $params = [];

    $params[':pid'] = $id;
    

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
        <?php if(is_logged_in()) : ?>   
            <h1>Rate Product</h1>
            <form action="products-details.php?id=<?php se($id); ?>" method=POST>
            <label for="rating_number"> Rate Product from 1-5: </label><br> 
            <input type="number" min=0 max=5 id="rating_number" name="rating_number"><br>
            <label for="comment"> Share your comment: </label><br>    
            <textarea id="comment" name="comment" style="width:400px; height:100px;"></textarea><br><br>
            <input type="submit" value="Rate" name="rate"/><br>
            </form>
            <?php endif; ?> 
        
        <h1>Product Ratings</h1>
        <table class="table">
        <?php foreach ($result1 as $index => $record) : ?>
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

    <?php endif; ?>
</div>
<?php
require(__DIR__ . "/../../partials/pagination.php");
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../partials/flash.php");
?>