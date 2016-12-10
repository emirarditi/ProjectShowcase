<?php
include "DataObjects/DatabaseInstance.php";
$keywordArray = explode(" ",$_GET['keyword']);
$categoryId = $_GET['category'];
$keywordString = "";
for($i = 0; $i < count($keywordArray); $i++){
    $keywordString.=$keywordArray[$i];
    if($i !== count($keywordArray) - 1)
        $keywordString.="|";
}
$products = [];
var_dump($keywordArray);
if($categoryId == 0) {
    echo "Hello";
    $products = $database->select("Products", "*", [
            "product_description[REGEXP]" => $keywordString
    ]);
}
else {
    var_dump($keywordString);
    echo "hi";
    $products = $database->select("Products", "*", [
        "AND" =>[
        "product_description[REGEXP]" => $keywordString,
        "product_category_id" => $categoryId
        ]
    ]);
}

var_dump($products);