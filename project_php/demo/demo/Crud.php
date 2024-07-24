<?php

try {
    $conn = new PDO("mysql:host=localhost:3306;dbname=demo", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->query("SELECT * FROM customer");
    $customers = $stmt->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    echo " Connection filed: " . $e->getMessage();
    die();
}
print_r($customers);

?>

<h1>Customer List</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($customers as $cust) : ?>
        <tr>
            <td><?php echo htmlspecialchars($cust->id); ?></td>
            <td><?php echo htmlspecialchars($cust->name); ?></td>
            <td><?php echo htmlspecialchars($cust->age); ?></td>
            <td><?php echo htmlspecialchars($cust->address); ?></td>
            <td><?php echo htmlspecialchars($cust->dob); ?></td>
            <td>
                <button>
                    <a href="form.php?id=<?php echo htmlspecialchars($cust->id); ?>">Edit</a>
                </button>
                ||
                <button>
                    <a href="delete_customer.php?delete_id=<?php echo htmlspecialchars($cust->id); ?>" onclick="return confirm('Are you sure you want to delete this customer?');">Delete
                    </a>
                </button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>