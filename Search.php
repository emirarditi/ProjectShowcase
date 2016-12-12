<?php
include_once "DataObjects/DatabaseInstance.php";
$keywordArray = explode(" ",$_GET['keyword']);
$categoryId = $_GET['category'];
$keywordString = "";
for($i = 0; $i < count($keywordArray); $i++){
    $keywordString.=$keywordArray[$i];
    if($i !== count($keywordArray) - 1)
        $keywordString.="|";
}
$products = [];
if($categoryId == 0) {
    $products = $database->select("products", "*", [
            "product_description[REGEXP]" => $keywordString
    ]);
}
else {
    $products = $database->select("products", "*", [
        "AND" =>[
        "product_description[REGEXP]" => $keywordString,
        "product_category_id" => $categoryId
        ]
    ]);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include "Head.php";?>
    </head>
    <body>
    <div>
        <?php include "navbar.php";?>
        <div class="container">
            <?php
                foreach ($products as $product){
                    echo '<h3><a href="#">' . $product["product_name"] . '</a></h3>';
                    echo '<p>' . $product["product_description"] . '</p>';
                    echo '<br><br>';
                }
            ?>
        </div>
    </div>
    </body>
</html>