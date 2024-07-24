<?php
require "connection.php";
require "Customer.php";

// $conn = $pdo: Khởi tạo biến $conn từ biến kết nối cơ sở dữ liệu $pdo.
$conn = $pdo;

// Xử lý yêu cầu xóa trước
if (isset($_GET["delete_id"])) {
    $delete_id = $_GET["delete_id"];
    deleteCustomer($delete_id, $conn);
    header("location: listCustomer.php");
    exit();
} else {
    echo "No ID provided for deletion.";
}

// $_REQUEST["id"] ?? -1: Lấy giá trị id từ request (GET hoặc POST). Nếu không có id được cung cấp, sử dụng giá trị mặc định là -1.
$id = $_REQUEST["id"] ?? -1;

// $customer = getCustomerById($id, $conn): Lấy thông tin khách hàng theo id và lưu vào biến $customer.
$customer = getCustomerById($id, $conn);

// Xử lý form submission: Khi phương thức request là POST, lấy dữ liệu từ form và lưu vào các biến tương ứng.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_REQUEST["fullName"]);
    $age = trim($_REQUEST["age"]);
    $address = trim($_REQUEST["address"]);
    $dob = trim($_REQUEST["dob"]);
    $id = trim($_REQUEST["id"]);

    // Nếu id nhỏ hơn 0, thực hiện thêm mới khách hàng bằng hàm saveCustomer.
    if ($id < 0) {
        saveCustomer($name, $age, $address, $dob, $conn);
    } else {
        // Nếu id lớn hơn hoặc bằng 0, thực hiện cập nhật thông tin khách hàng bằng hàm editCustomer.
        editCustomer($name, $age, $address, $dob, $conn, $id);
    }
    header("location: listCustomer.php");
    exit();
}

// Hàm lưu khách hàng
function saveCustomer($name, $age, $address, $dob, $conn)
{
    try {
        $sql = "insert into customer (`name`, `age`, `address`, `dob`) values (:name, :age, :address, :dob)";
        $sttm = $conn->prepare($sql);
        $sttm->execute(["name" => $name, "age" => $age, "address" => $address, "dob" => $dob]);
        echo "<br>";
        echo "insert success";
    } catch (PDOException $e) {
        echo "insert error " . $e->getMessage();
    }
}

// Hàm chỉnh sửa khách hàng
function editCustomer($name, $age, $address, $dob, $conn, $id)
{
    try {
        $sql = "update customer set name= :name, age= :age, address= :address, dob= :dob where id = :id";
        $sttm = $conn->prepare($sql);
        $sttm->execute(["name" => $name, "age" => $age, "address" => $address, "dob" => $dob, "id" => $id]);
        echo "<br>";
        echo "insert success";
    } catch (PDOException $e) {
        echo "insert error " . $e->getMessage();
    }
}

// Hàm xóa khách hàng
function deleteCustomer($delete_id, $conn)
{
    try {
        $sttm = $conn->prepare("DELETE FROM customer WHERE id = :id");
        $sttm->bindParam("id", $delete_id, PDO::PARAM_INT);
        $sttm->execute();
        echo "Customer with ID $delete_id has been deleted successfully.";
    } catch (PDOException $e) {
        echo " Error: " . $e->getMessage();
    }
}

// Hàm lấy thông tin khách hàng theo ID
function getCustomerById($id, $conn)
{
    try {
        $sql = "select * from customer where id = :id";
        $sttm = $conn->prepare($sql);
        $sttm->execute(["id" => $id]);
        $sttm->setFetchMode(PDO::FETCH_CLASS, "Customer");
        // fetch lấy ra một object in table database
        $customer = $sttm->fetch();
        return $customer;
    } catch (PDOException $e) {
        echo "get customer error " . $e->getMessage();
    }
}



?>

<form method="POST">
    <input type="text" name="id" value='<?php echo !empty($customer) ? $customer->id : -1 ?>'>
    <h1>
        <span>Nhap ten </span>
        <input type="text" name="fullName" value='<?php echo !empty($customer) ? $customer->name : "" ?>'>
    </h1>
    <h1>
        <span>Nhap address </span>
        <input type="text" name="address" value='<?php echo !empty($customer) ? $customer->address : "" ?>'>
    </h1>

    <h1>
        <span>Nhap tuoi</span>
        <input type="text" name="age" value='<?php echo !empty($customer) ? $customer->age : "" ?>'>
    </h1>
    <h1>
        <span>Nhap ngay sinh</span>
        <input type="datetime-local" name="dob" value='<?php echo !empty($customer) ? date("Y-m-d\Th:i:s", strtotime($customer->dob)) : "" ?>'>
    </h1>

    <input type="submit" value="submit">
</form>