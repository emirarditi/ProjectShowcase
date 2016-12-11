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
if($categoryId == 0) {
    $products = $database->select("Products", "*", [
            "product_description[REGEXP]" => $keywordString
    ]);
}
else {
    $products = $database->select("Products", "*", [
        "AND" =>[
        "product_description[REGEXP]" => $keywordString,
        "product_category_id" => $categoryId
        ]
    ]);
}