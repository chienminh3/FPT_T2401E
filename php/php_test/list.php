<?php
require "dbconnect.php";
try {
    $sql = "select * from item_sale";
    $sttm = $pdo->prepare($sql);
    $sttm->execute();
    $data =  $sttm->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    echo "get customer error " . $e->getMessage();
}

?>


<div style="width: 1000px;margin: 0 auto;">
    <h1 style="width: 100%;height: 50px;justify-content: center;background-color: green;color: #fff;">V_Store items</h1>
    <h1 style="width: 100%;height: 40px;text-align: center;background-color: green;color: orange;">Sale items</h1>
    <a style="background-color: green;text-decoration: none;color: #fff; border-radius: 5px;" href="form.php"> Add New</a>
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
                    <a href="form.php?id=<?php echo $value->id ?>">edit</a>
                    <a href="form.php?delete=<?php echo $value->id ?>">delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>