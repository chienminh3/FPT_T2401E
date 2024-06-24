<?php
require "dbconnect.php";
$conn = $pdo;

if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    delete($id, $conn);
    header("location: list.php");
    exit();
} else {
    echo "No ID provided for deletion.";
}

$id = $_REQUEST["id"] ?? -1;

$data = getDataById($id, $conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemcode = trim($_REQUEST["itemcode"]);
    $itemname = trim($_REQUEST["itemname"]);
    $quantity = trim($_REQUEST["quantity"]);
    $expireddate = trim($_REQUEST["expireddate"]);
    $note = trim($_REQUEST["note"]);
    $id = trim($_REQUEST["id"]);

    if ($id < 0) {
        // insert
        insert($itemcode, $itemname, $quantity, $expireddate, $note, $conn);
    } else {
        // update
        update($id, $itemcode, $itemname, $quantity, $expireddate, $note, $conn);
    }
    header("location: http://localhost/php_test/list.php");
    exit();
}

function insert($itemcode, $itemname, $quantity, $expireddate, $note, $conn)
{
    try {
        $sql = "insert into item_sale (`item_code`, `item_name`, `quantity`, `expired_date`, `note`) values (:item_code,:item_name,:quantity,:expired_date,:note)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam("item_code", $itemcode, PDO::PARAM_STR);
        $stmt->bindParam("item_name", $itemname, PDO::PARAM_STR);
        $stmt->bindParam("quantity", $quantity, PDO::PARAM_STR);
        $stmt->bindParam("expired_date", $expireddate, PDO::PARAM_STR);
        $stmt->bindParam("note", $note, PDO::PARAM_STR);
        $stmt->execute();
        // header
        header("location: http://localhost/php_test/list.php");
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function getDataById($id, $conn)
{
    try {
        $sql = "select * from item_sale where id= :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam("id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $data;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function update($id, $itemcode, $itemname, $quantity, $expireddate, $note, $conn)
{
    try {
        $sql = "update item_sale set item_code= :item_code, item_name= :item_name, quantity= :quantity, expired_date= :expired_date, note= :note where id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam("id", $id, PDO::PARAM_INT);
        $stmt->bindParam("item_code", $itemcode, PDO::PARAM_INT);
        $stmt->bindParam("item_name", $itemname, PDO::PARAM_STR);
        $stmt->bindParam("quantity", $quantity, PDO::PARAM_STR);
        $stmt->bindParam("expired_date", $expireddate, PDO::PARAM_STR);
        $stmt->bindParam("note", $note, PDO::PARAM_STR);
    } catch (PDOException $e) {
        echo "insert error " . $e->getMessage();
    }
}

function delete($id, $conn)
{
    try {
        $sql = "delete item_sale where id= :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam("id", $id, PDO::PARAM_INT);
        $stmt->execute();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>


<form method="POST">
    <input type="text" name="id" value='<?php echo !empty($data) ? $data->id : -1 ?>'>
    <div>
        <span>Item code</span>
        <input type="text" name="itemcode" value='<?php echo !empty($data) ? $data->item_code : "" ?>'>
    </div>
    <div>
        <span>Item name</span>
        <input type="text" name="itemname" value='<?php echo !empty($data) ? $data->item_name : "" ?>'>
    </div>
    <div>
        <span>Quantity</span>
        <input type="text" name="quantity" value='<?php echo !empty($data) ? $data->quantity : "" ?>'>
    </div>
    <div>
        <span>Expired date</span>
        <input type="datetime-local" name="expireddate" value='<?php echo !empty($data) ? date("Y-m-d\Th:i:s", strtotime($data->expired_date)) : "" ?>'>
    </div>
    <div>
        <span>Note</span>
        <input type="text" name="note" value='<?php echo !empty($data) ? $data->note : "" ?>'>
    </div>
    <input type="submit" name="submit">

</form>