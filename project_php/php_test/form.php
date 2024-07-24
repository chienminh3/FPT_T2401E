<?php
require "dbconnect.php";
$conn = $pdo;
$errors = null;

if (isset($_GET["delete_id"])) {
    $delete_id = $_GET["delete_id"];
    delete($delete_id, $conn);
    header("location: http://localhost/php_test/list.php");
    exit();
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

    // Kiểm tra itemcode không chứa ký tự đặc biệt
    if (!preg_match('/^[a-zA-Z0-9]*$/', $itemcode)) {
        $errors = "Item code không được chứa ký tự đặc biệt.";
    }

    // Kiểm tra itemname không chứa ký tự đặc biệt
    if (!preg_match('/^[a-zA-Z0-9 ]*$/', $itemname)) {
        $errors = "Item name không được chứa ký tự đặc biệt.";
    }

    if (empty($errors)) {
        if ($id < 0) {
            // insert
            insert($itemcode, $itemname, $quantity, $expireddate, $note, $conn);
        } else {
            // update
            update($id, $itemcode, $itemname, $quantity, $expireddate, $note, $conn);
        }
        header("location: list.php");
        exit();
    }
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
        $data = $stmt->fetch(PDO::FETCH_OBJ);
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
        $stmt->bindParam("item_code", $itemcode, PDO::PARAM_STR);
        $stmt->bindParam("item_name", $itemname, PDO::PARAM_STR);
        $stmt->bindParam("quantity", $quantity, PDO::PARAM_STR);
        $stmt->bindParam("expired_date", $expireddate, PDO::PARAM_STR);
        $stmt->bindParam("note", $note, PDO::PARAM_STR);
        $stmt->bindParam("id", $id, PDO::PARAM_INT);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "insert error " . $e->getMessage();
    }
}

function delete($delete_id, $conn)
{
    try {
        $sql = "delete from item_sale where id= :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam("id", $delete_id, PDO::PARAM_INT);
        $stmt->execute();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


?>


<div style="width: 500px;height: auto;text-align: center;padding: 20px;box-sizing: border-box;border-radius: 10px;margin: 0 auto;">
    <h1 style="color: orange;width: 100%;height: 50px;text-align: center;justify-content: center;background-color: green;">Form Sale Items</h1>
    <form method="POST">
        <input type="hidden" name="id" value='<?php echo !empty($data) ? $data->id : -1 ?>'>
        <div style="width: 100%;display: flex;justify-content: space-between;margin-bottom: 10px;">
            <span style="font-weight: bold;font-size: 30px;">Item code</span>
            <input style="width: 250px;" type="text" name="itemcode" value='<?php echo !empty($data) ? $data->item_code : "" ?>'>
        </div>
        <div style="width: 100%;display: flex;justify-content: space-between;margin-bottom: 10px;">
            <span style="font-weight: bold;font-size: 30px;">Item name</span>
            <input style="width: 250px;" type="text" name="itemname" value='<?php echo !empty($data) ? $data->item_name : "" ?>'>
        </div>
        <div style="width: 100%;display: flex;justify-content: space-between;margin-bottom: 10px;">
            <span style="font-weight: bold;font-size: 30px;">Quantity</span>
            <input style="width: 250px;" type="text" name="quantity" value='<?php echo !empty($data) ? $data->quantity : "" ?>'>
        </div>
        <div style="width: 100%;display: flex;justify-content: space-between;margin-bottom: 10px;">
            <span style="font-weight: bold;font-size: 30px;">Expired date</span>
            <input style="width: 250px;" type="datetime-local" name="expireddate" value='<?php echo !empty($data) ? date("Y-m-d\Th:i:s", strtotime($data->expired_date)) : "" ?>'>
        </div>
        <div style="width: 100%;display: flex;justify-content: space-between;margin-bottom: 10px;">
            <span style="font-weight: bold;font-size: 30px;">Note</span>
            <input style="width: 250px;" type="text" name="note" value='<?php echo !empty($data) ? $data->note : "" ?>'>
        </div>
        <button style="width: 100%;height: 50px;text-align: center;background-color: green;font-size: 20px;font-weight: bold;color: #fff;" type="submit">SUBMIT</button>
        
            <p name="valid" style="color: red;" value='<?php echo empty($errors) ? $errors : "" ; echo $errors;?>'></p>
            <p name="valid" style="color: red;" value='<?php echo empty($errors) ? $errors : ""; echo $errors;?>'></p>

    </form>
</div>