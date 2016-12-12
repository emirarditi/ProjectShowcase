<?php
 include_once "DataObjects/DatabaseInstance.php";

 $options = $database->select("categories",[
     "category_id",
     "category_name"
    ]);

 foreach ($options as $option){
     echo '<option value="' . $option["category_id"] . '">' . $option["category_name"] . '</option>';
 }