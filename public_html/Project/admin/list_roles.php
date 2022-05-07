<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

$db = getDB();

if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH" . "home.php"));
}
//handle the toggle first so select pulls fresh data
if (isset($_POST["role_id"])) {
    $role_id = se($_POST, "role_id", "", false);
    if (!empty($role_id)) {
        $db = getDB();
        $stmt = $db->prepare("UPDATE Roles SET is_active = !is_active WHERE id = :rid");
        try {
            $stmt->execute([":rid" => $role_id]);
            flash("Updated Role", "success");
        } catch (PDOException $e) {
            flash(var_export($e->errorInfo, true), "danger");
        }
    }
}
$base_query = "SELECT id, name, description, is_active from Roles";
$total_query = "SELECT count(1) AS total FROM Roles";
$params = [];

$search = se($_GET, "role", "", false);

$query=" WHERE 1=1";
if (!empty($search))
{  
    $query .= " AND name LIKE :role";
    $params[":role"] = "%$search%";
}

$query .= " ORDER BY modified desc";

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
    if ($results) {
        $roles = $results;
    } else {
        flash("No matches found", "warning");
    }

} catch(PDOException $e){
    error_log(var_export($e,true));
    flash("Error fetching items", "danger");
}


?>
<div class="container-fluid">
    <h1>List Roles</h1>
    <form class="row row-cols-auto g-3 align-items-center">
    <div class="col">
        <div class="input-group" data="i">
            <div class="input-group-text">Role Filter</div>
            <input class="form-control" name="role" value="<?php se($search); ?>" />
        </div>
    </div>
    <div class="col">
        <div class="input-group">
            <input type="submit" class="btn btn-primary" value="Search" />
        </div>
    </div>
</form>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Active</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php if (empty($roles)) : ?>
                <tr>
                    <td colspan="100%">No roles</td>
                </tr>
            <?php else : ?>
                <?php foreach ($roles as $role) : ?>
                    <tr>
                        <td><?php se($role, "id"); ?></td>
                        <td><?php se($role, "name"); ?></td>
                        <td><?php se($role, "description"); ?></td>
                        <td><?php echo (se($role, "is_active", 0, false) ? "active" : "disabled"); ?></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="role_id" value="<?php se($role, 'id'); ?>" />
                                <?php if (isset($search) && !empty($search)) : ?>
                                    <?php /* if this is part of a search, lets persist the search criteria so it reloads correctly*/ ?>
                                    <input type="hidden" name="role" value="<?php se($search, null); ?>" />
                                <?php endif; ?>
                                <input class="btn btn-primary" type="submit" value="Toggle" />
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <?php
    //note we need to go up 1 more directory
    require(__DIR__ . "/../../../partials/pagination.php");
    require_once(__DIR__ . "/../../../partials/flash.php");
    ?>