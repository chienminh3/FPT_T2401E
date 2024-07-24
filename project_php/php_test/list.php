<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<?php
require "dbconnect.php";

try {
    $sql = "select * from item_sale";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $data =  $stmt->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    echo "get customer error " . $e->getMessage();
}

?>

<body>
    <div style="width: 1000px;margin: 0 auto;">
        <h1 style="width: 100%;height: 50px;justify-content: center;background-color: green;color: #fff;">V_Store items</h1>
        <h1 style="width: 100%;height: 40px;text-align: center;background-color: green;color: orange;">Sale items</h1>
        <a href="form.php"><button style="width: 100px;height: 40px;background-color: green;border-radius: 5px;color: #fff;font-weight: bold;">Add new</button></a>
        <table style="width: 1000px;">
            <tr style="background-color: green;color: #fff;text-align: center;">
                <td style="text-align: center;">Id</td>
                <td style="text-align: center;">Item Code</td>
                <td style="text-align: center;">Item Name</td>
                <td style="text-align: center;">Quantity</td>
                <td style="text-align: center;">Expired Date</td>
                <td style="text-align: center;">Note</td>
                <td></td>
            </tr>

            <?php foreach ($data as $value) : ?>
                <tr>
                    <td style="text-align: center;"><?php echo $value->id ?></td>
                    <td style="text-align: center;"><?php echo $value->item_code ?></td>
                    <td style="text-align: center;"><?php echo $value->item_name ?></td>
                    <td style="text-align: center;"><?php echo $value->quantity ?></td>
                    <td style="text-align: center;"><?php echo $value->expired_date ?></td>
                    <td style="text-align: center;"><?php echo $value->note ?></td>
                    <td style="text-align: center;">
                        <a href="form.php?id=<?php echo $value->id ?>"><i style="font-size: 20px;color: goldenrod;" class="fa fa-pencil-square-o"></i></a>
                        <a style="margin-left: 15px;" href="form.php?delete_id=<?php echo $value->id ?>"><i style="font-size: 20px;color: red;" class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>