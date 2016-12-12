<?php
    include_once "DataObjects/DatabaseInstance.php";
    $productName = $_GET['name'];

    $product = $database->select("products", "*", [
        "product_name" => $productName
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
            echo '<h2>' . $productName . '</h2>';
        ?>
    </div>
</body>
</html>