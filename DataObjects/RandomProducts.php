<?php

$counted = $database->count("Products");

$randProd = mt_rand(1, $counted-1);
$prod = $database->select("Products", "*");

for ($i = $randProd-1; $i < $randProd+1; $i = $i + 1){

    echo '<a href="#">' . $prod[$i]["product_name"] . '</a>';
    echo '<p>' . $prod[$i]["product_description"] . '</p>';
    echo '<br><br>';
}