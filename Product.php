<?php
    include_once "DataObjects/DatabaseInstance.php";
    $productId = $_GET['productId'];

    $product = $database->select("products", "*", [
        "product_id" => $productId
    ]);

?>
<!DOCTYPE html>
<html>
<head>
    <?php include "Head.php";?>
</head>

<body>
    <?php include_once "navbar.php";?>

    <div class="col-md-3" style="border-right: solid #000; border-bottom: solid #000;">
<!--    this is the similar product section  -->
        <br><br>
    </div>

    <div class="col-md-9">
        <?php
            echo '<h2>' . $product[0]["product_name"] . '</h2>';
        ?>
    </div>
</body>
</html>