<?php
 include_once "DataObjects/DatabaseInstance.php";
 $options = $database->select("categories",[
     "category_id",
     "category_name"
    ]);
 foreach ($options as $option){
     if(isset($_GET["selected"])){
        if($option["category_id"] == $_GET["selected"]){
            echo '<option value="' . $option["category_id"] . '" selected>' . $option["category_name"] . '</option>';
        }
        else
            echo '<option value="' . $option["category_id"] . '">' . $option["category_name"] . '</option>';
     }
     else
        echo '<option value="' . $option["category_id"] . '">' . $option["category_name"] . '</option>';
 }