<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 100;
        $y = "T2401E";
        $arr = ["A" => "10", "B" => "5", "C" => "20"];
        foreach($arr as $key_arr => $value) {
            echo $key_arr ." = ". $value ."<br>";
        }
    ?>
    <h1>Hello <?php echo $x?></h1>
    <h1>hello <?= $y ?></h1>
</body>
</html>