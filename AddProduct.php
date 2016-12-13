<?php
    include "DataObjects/DatabaseInstance.php";
    $data_to_used = array_slice($_POST,1);
    $isPresent = $_POST["typeIndex"];
    $data_to_used["reg_date"] = date("Y-m-d");
    if($isPresent == 0){
        $database->insert("products", $data_to_used);
    }
    else{
        $database->update("products", $data_to_used, [
            "product_id" => $isPresent
        ]);
    }
    ?>
<script>function returnInsert() {
        window.location.href = "index.php";
    }
    returnInsert();
</script>
