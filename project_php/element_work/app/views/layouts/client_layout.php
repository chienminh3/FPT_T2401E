<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $this->view("layouts/header");
    $this->view($data["content"], $data);
    $this->view("layouts/footer");
    ?>
</body>
</html>