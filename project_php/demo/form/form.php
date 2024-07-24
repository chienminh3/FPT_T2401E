<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $error = array();
            $fullName = trim($_REQUEST["fullName"]);
            $email = trim($_REQUEST["email"]);
            $age = trim($_REQUEST["age"]);
            $checkbox = isset($_REQUEST["check"]) ? $_REQUEST["check"] : null;
            $gender = $_REQUEST["gender"];

            // validate fullName
            if (empty($fullName)) {
                $error["fullName"]["required"] = "Vui long nhap ten !";
            } else {
                if (strlen($fullName) < 10) {
                    $error["fullName"]["lenInvalid"] = "Do dai cua ten phai 10 ky tu tro len !";
                }
            }
            
            // validate email
            if (empty($email)) {
                $error["email"]["required"] = "Vui long nhap email !";
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error["email"]["Invalid"] = "Email chua dung VD: example@gmail.com";
                }
            }

            // validate age
            if (empty($age)) {
                $error["age"]["required"] = "Vui long nhap tuoi !";
            } else {
                if ($age < 1) {
                    $error["age"]["ageInvalid"] = "Tuoi phai lon hon 1 !";
                }
            }

            // validate checkbox
            if (empty($checkbox)) {
                $error["checkbox"]["sizeInvalid"] = "Vui long dien thong tin day du !";
            } else {
                if (count($checkbox) > 2) {
                    $error["checkbox"]["limit"] = "Chi duoc chon 2 check !";
                }
            }

            if (empty($error)) {
                header("Location: ../view/Header.php");
            }
            
            print_r($fullName);
            echo "<br>";
            print_r($email);
            echo "<br>";
            print_r($age);
            echo "<br>";
            print_r ($checkbox);
            echo "<br>";
            print_r($gender);

            echo "<br>";
            print_r($error);

        }

    ?>

    <form method="POST">
        
    <h1>
        <span>nhap ten </span>
        <input type="text" name="fullName">
        <?php
            echo empty($error["fullName"]["required"]) ? "" : "<span style='color:red'>".$error['fullName']['required']."</span>";
        ?>

        <?php 
            echo empty($error["fullName"]["lenInvalid"]) ? "" : "<span style='color:red'>".$error['fullName']['lenInvalid']."</span>";
        ?>
    </h1>

    <h1>
    <span>nhap email </span>
        <input type="text" name="email">
        <?php
            echo empty($error["email"]["required"]) ? "" : "<span style='color:red'>".$error['email']['required']."</span>"; 
        ?>

<?php
            echo empty($error["email"]["Invalid"]) ? "" : "<span style='color:red'>".$error['email']['Invalid']."</span>"; 
        ?>
    </h1>

    <h1>
    <span>nhap age </span>
        <input type="number" name="age">
        <?php
            echo empty($error["age"]["required"]) ? "" : "<span style='color:red'>".$error['age']['required']."</span>";
        ?>
        <?php
            echo empty($error["age"]["ageInvalid"]) ? "" : "<span style='solor:red'>".$error['age']['ageInvalid']."</span>";
        ?>
    </h1>
        
    <h1>
        <input type="checkbox" name="check[1]" value="check1" <?php echo isset($checkbox) && in_array("check1", $checkbox) ? "checked" : "" ?> > checkBox1
        <input type="checkbox" name="check[2]" value="check2" <?php echo isset($checkbox) && in_array("check2", $checkbox) ? "checked" : "" ?> > checkBox2
        <input type="checkbox" name="check[3]" value="check3" <?php echo isset($checkbox) && in_array("check3", $checkbox) ? "checked" : "" ?> > checkBox3

        <?php
            echo empty($error["checkbox"]["required"]) ? "" : "<span style='color:red;'>".$error['checkbox']['required']."</span>";
        ?>
        
        <?php
            echo empty($error["checkbox"]["sizeInvalid"]) ? "" : "<span style='color:red;'>".$error['checkbox']['sizeInvalid']."</span>";
        ?>

        <?php
            echo empty($error["checkbox"]["limit"]) ? "" : "<span style='color:red'>".$error['checkbox']['limit']."</span>";
        ?>

    </h1>

    <h1>
        <input type="radio" name="gender" value="male" checked <?php echo !empty($gender) && $gender == "male" ? "checked" : ""; ?>> male
        <input type="radio" name="gender" value="female" <?php echo !empty($gender) && $gender == "female" ? "checked" : ""; ?>>female
        <input type="radio" name="gender" value="other" <?php echo !empty($gender) && $gender == "other" ? "checked" : ""; ?>>other 
    </h1>

    <button type="submit" value="submit">SUBMIT</button>
    </form>

</body>
</html>