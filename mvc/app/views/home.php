<?php 
$name = "Hello T2401E";

print_r($data["customers"]);

?>

<button onclick="addToCart(1, 1)">add to cart</button>


<h1>this is home page , <?=$name ?></h1>

<form action="http://localhost/mvc/home/index" method="POST">
    <input type="text" name="name" value="<?= $data["name"] ?>" />
    <input type="number" name="age" value="<?= $data["age"] ?>"/>
    <input type="submit" value="Search" />
</form>

<button><a href="http://localhost/mvc/home/index/<?=($data["page"] > 1) ? $data["page"] - 1  : 1 ?>/<?= $data["name"]?>/<?=$data["age"]?>">Prev</a></button>
<button><a href="http://localhost/mvc/home/index/<?= ($data["page"] >= 3) ? $data["page"] : $data["page"] + 1 ?>/<?= $data["name"]?>/<?=$data["age"]?>">Next</a></button>

<a href="http://localhost/mvc/product/index"> go to product page</a>

<script>
    function addToCart(id, quantity) {
        var data = {id:id, quantity:quantity};
        $.ajax({
            url: 'http://localhost/mvc/home/addToCart',
            method: "POST",
            data : data,
            success: function (response) {
                alert(response);
            },
            error : function(error) {
                alert(error);
            }
        });
    }

</script>