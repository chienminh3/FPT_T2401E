<?php
require "connectionDB.php";
require "Staff.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $error = array();
    $name = trim($_REQUEST["name"]);
    $age = trim($_REQUEST["age"]);
    $address = trim($_REQUEST["address"]);
    $dob = trim($_REQUEST["dob"]);
    $gender = $_REQUEST["gender"];
    $checkbox = isset($_REQUEST["check"]) ? $_REQUEST["check"] : null;

    // valid name
    if (empty($name)) {
        $error["name"]["required"] = "Vui long nhap ten!";
    } else {
        if (strlen($name) <= 10) {
            $error["name"]["lenInvalid"] = "Ten phai 10 ky tu tro len!";
        }
    }
    // valid age
    if (empty($age)) {
        $error["age"]["required"] = "Vui long nhap tuoi!";
    } else {
        if ($age < 1) {
            $error["age"]["ageInvalid"] = "Tuoi phai lon hon 1!";
        }
    }

    // valid address
    if (empty($address)) {
        $error["address"]["required"] = "Vui long nhap dia chi!";
    }

    // valid checkbox
    if (empty($checkbox)) {
        $error["checkbox"]["required"] = "Vui long them thong tin!";
    } else {
        if (count($checkbox) > 2) {
            $error["checkbox"]["limitInvalid"] = "Chi duoc chon 2!";
        }
    }
}

// save staffs
function saveStaff($name, $age, $gender, $address, $dob, $conn) {
    try {
        $sql = "insert into staff (`name`, `age`, `gender`, `address`, `dob`) values (:name, :age, :gender, :address, :dob)";
        $sttm = $conn->prepare($sql);
        $sttm->execute(["name"=>$name, "age"=>$age, "gender"=>$gender, "address"=>$address, "dob"=>$dob]);
        echo "<br>";
        echo "success !";
    } catch (PDOException $e) {
        echo "insert error ".$e->getMessage();
    }
}



?>

<form method="POST">
    <h1>
        <span>Name </span>
        <input type="text" name="name">
        <?php
        echo empty($error["name"]["required"]) ? "" : "<span style='color:red'>" . $error['name']['required'] . "</span>";
        ?>
        <?php
        echo empty($error["name"]["lenInvalid"]) ? "" : "<span style='color:red'>" . $error['name']['lenInvalid'] . "</span>";
        ?>
    </h1>
    <h1>
        <span>Age </span>
        <input type="number" name="age">
        <?php
        echo empty($error["age"]["required"]) ? "" : "<span style='color:red'>" . $error['age']['required'] . "</span>";
        ?>
        <?php
        echo empty($error["age"]["ageInvalid"]) ? "" : "<span style='color:red'>" . $error['age']['ageInvalid'] . "</span>";
        ?>
    </h1>
    <h1>
        <input type="radio" name="gender" value="male" checked <?php echo !empty($gender)&&$gender == "male" ? "checked":""?>>male
        <input type="radio" name="gender" value="female" <?php echo !empty($gender)&&$gender == "female" ? "checked":""?>>female
        <input type="radio" name="gender" value="other" <?php echo !empty($gender)&&$gender == "other" ? "checked":""?>>other
    </h1>
    <h1>
        <span>Address</span>
        <input type="text" name="address">
        <?php
        echo empty($error["address"]["required"]) ? "" : "<span style='color:red'>" . $error['address']['required'] . "</span>";
        ?>
    </h1>
    <h1>
        <span>brith date</span>
        <input type="datetime-local" name="dob">
    </h1>
    <h1>
        <input type="checkbox" name="check[1]" value="check1" <?php echo isset($checkbox)&&in_array("check1", $checkbox) ? "checked" : "" ?>>business
        <input type="checkbox" name="check[2]" value="check2" <?php echo isset($checkbox)&&in_array("check2", $checkbox) ? "checked" : "" ?>>maketing
        <input type="checkbox" name="check[3]" value="check3" <?php echo isset($checkbox)&&in_array("check3", $checkbox) ? "checked" : "" ?>>saler
            <?php 
                echo empty($error["checkbox"]["required"]) ? "" : "<span style='color:red'>".$error['checkbox']['required']."</span>";
            ?>
            <?php
                echo empty($error["checkbox"]["limitInvalid"]) ? "" : "<span style='color:red'>".$error['checkbox']['limitInvalid']."</span>"; 
            ?>

    </h1>
    <button type="submit" value="submit">SUBMIT</button>
</form>