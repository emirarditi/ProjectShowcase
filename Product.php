<?php
    include_once "DataObjects/DatabaseInstance.php";
    $productId = $_GET['productId'];

    $product = $database->select("products", "*", [
        "product_id" => $productId
    ]);

    $similar = $database->select("categories", "*" ,[
        "category_id" => $product[0]["product_category_id"]
    ]);

    $similar_products = $database->select("products", "*", [
       "product_category_id" => $similar[0]["category_id"]
    ]);

    $similar_counted = count($similar_products);

?>
<!DOCTYPE html>
<html>
<head>
    <?php include "Head.php";?>
</head>

<body>
    <?php include_once "navbar.php";?>

    <div class="col-md-3" style="border-right: solid #000; border-bottom: solid #000;">
        <h3>People also searched: </h3>
        <br>
        <?php
            if($similar_counted >= 5) {
                for ($i = 0; $i < 5; $i++) {
                    echo '<h4><a href="Product.php?productId=' . $similar_products[$i]["product_id"] . '">' . $similar_products[$i]["product_name"] . '</a></h4>';
                    echo '<p>' . $similar_products[$i]["product_description"] . '</p>';
                    echo '<br><br>';
                }
            }
            else{
                for ($i = 0; $i < $similar_counted; $i++){
                    echo '<h4><a href="Product.php?productId=' . $similar_products[$i]["product_id"] . '">' . $similar_products[$i]["product_name"] . '</a></h4>';
                    echo '<p>' . $similar_products[$i]["product_description"] . '</p>';
                    echo '<br><br>';
                }
            }
        ?>
        <br>
    </div>

    <div class="col-md-9">
        <?php
            echo '<h2>' . $product[0]["product_name"] . '</h2>';
        ?>
    </div>
</body>
</html>