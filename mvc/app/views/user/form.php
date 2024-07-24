<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<?php 
    $user = $data["user"] ;
?>
<body>
    <form action="http://localhost/mvc/user/execute" method="POST">
        <input type="hidden" name="id" value='<?php echo ($user)  ? $user->id : "" ?>'>
        <input type="text" name="username" value='<?php echo ($user) ? $user->username : "" ?>' placeholder="input username">
        <input type="text" name="password" value='<?php echo ($user) ? $user->password : "" ?>' placeholder="input password">
        <input type="text" name="role" value='<?php echo ($user) ? $user->role : "" ?>' placeholder="input role">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>