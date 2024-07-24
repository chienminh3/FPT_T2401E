<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="width: 700px;">
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        <?php $listUser = $data["listUser"]; ?>
        <?php foreach ($listUser as $key => $value) : ?>
            <tr>
                <td><?php echo $value->id ?></td>
                <td><?php echo $value->username ?></td>
                <td><?php echo $value->password ?></td>
                <td><?php echo $value->role ?></td>
                <td>
                    <a href="http://localhost/mvc/user/execute/<?php echo $value->id ?>">Edit</a> 
                    ||
                    <a href="http://localhost/mvc/user/delete/<?php echo $value->id ?>"> Delete</a>
                    ||
                    <button onclick="addToCart($value)">Add to cart</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>