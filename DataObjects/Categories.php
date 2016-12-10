<?php
 include "DataObjects/DatabaseInstance.php";

 $options = $database->select("Categories",[
     "category_id",
     "category_name"
    ]);

 foreach ($options as $option){
     echo '<option class="" value="' . $option["category_id"] . '">' . $option["category_name"] . '</option>';
 }