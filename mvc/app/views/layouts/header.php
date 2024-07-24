<div>
    <?php if(isset($_SESSION["user"])): ?>
        <p>Hello <?=$_SESSION["user"]["username"]?></p>
        <a href="http://localhost/mvc/user/logout">Logout</a>
    <?php else : ?>
        <a href="http://localhost/mvc/user/login">Login</a>
    <?php endif; ?>
</div>