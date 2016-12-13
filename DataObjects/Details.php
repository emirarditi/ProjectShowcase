<?php
include_once "DataObjects/DatabaseInstance.php";
$options = $database->select("detailtypes",[
    "detail_id",
    "detail_name"
]);
foreach ($options as $option){
    if(isset($_GET["selected"])){
        if($option["detail_id"] == $_GET["selected"]){
            echo '<option value="' . $option["detail_id"] . '" selected>' . $option["detail_name"] . '</option>';
        }
        else
            echo '<option value="' . $option["detail_id"] . '">' . $option["detail_name"] . '</option>';
    }
    else
        echo '<option value="' . $option["detail_id"] . '">' . $option["detail_name"] . '</option>';
}