<?php

$counted = $database->count("products");

$randProd = mt_rand(0, $counted-1);
$prod = $database->select("products", "*");
$postamount = 10;

for ($i = $randProd; $i < $randProd + $postamount; $i = $i + 1){
    if ($i == $counted){
        $i = 0;
        $posted = $postamount - ($counted - $randProd);
        $randProd = $posted - $postamount;
    }
    echo '<a href="../Projectshowcase/Product.php?name=' . $prod[$i]["product_name"] . '">' . $prod[$i]["product_name"] . '</a>';
    echo '<p>' . $prod[$i]["product_description"] . '</p>';
    echo '<br><br>';
}