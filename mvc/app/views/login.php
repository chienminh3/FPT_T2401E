<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $error;
        if (isset($_REQUEST["error"])) {
            $error = $_REQUEST["error"];
        }
    
    
    ?>
    <form action="http://localhost/mvc/user/login" method="POST">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="password" placeholder="password">
        <span style="color: red;"><?php echo isset($error) && $error == "true" ? "username or password not correct" : "" ?></span>
        <input type="submit" value="submit">
    </form>
</body>
</html>