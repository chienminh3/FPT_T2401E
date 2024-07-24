<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://localhost/mvc/app/asset/css/layout.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php 
        $this->view("layouts/header");
        // print_r($data) ;
        $this->view($data["content"], $data);
        $this->view("layouts/footer");
    ?>
</body>
</html>