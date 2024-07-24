<?php
require_once "connection.php";
require "Customer.php";
try {
    $sql = "select * from customer";
    $sttm = $pdo->prepare($sql);
    $sttm->execute();
    $sttm->setFetchMode(PDO::FETCH_CLASS, "Customer");
    // fetchAll lấy ra một ra một mảng array
    $customers = $sttm->fetchAll();
    // echo "<br>";
    // print_r($customers);
} catch (PDOException $e) {
    echo "get customer error " . $e->getMessage();
}

?>


<table style="width: 700px;" border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>brithDay</th>
        <th>Action</th>
    </tr>
    <?php foreach ($customers as $customer) : ?>
        <tr>
            <th><?php echo htmlspecialchars($customer->id) ?></th>
            <th><?php echo htmlspecialchars($customer->name) ?></th>
            <th><?php echo htmlspecialchars($customer->age) ?></th>
            <th><?php echo htmlspecialchars($customer->address) ?></th>
            <th><?php echo htmlspecialchars($customer->dob) ?></th>
            <th>
                <a href="form.php?id=<?php echo $customer->id ?>">Edit</a> ||
                <a href="form.php?delete_id=<?php echo $customer->id ?>">Delete</a>
            </th>
        </tr>
    <?php endforeach ?>
</table>
<button><a href="form.php">Create</a></button>