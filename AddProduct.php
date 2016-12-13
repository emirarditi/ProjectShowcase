<?php
    include "DataObjects/DatabaseInstance.php";
    $data_to_used = array_slice($_POST,1,3);
    $product_id = $_POST["typeIndex"];
    $data_to_used["reg_date"] = date("Y-m-d");
    $detailTypes = $_POST["detail_type_id"];
    $detailValues = $_POST["detail_value"];
    if($product_id == 0){
        $database->insert("products", $data_to_used);
        $product_id = $database->select("products","product_id",[
            "AND" => $data_to_used
        ]);
        for($i = 0; $i < count($detailTypes); $i++){
            if($detailValues[$i] !== "")
            $database->insert("product_details",[
             "product_id" => $product_id[0],
             "detail_type_id" => $detailTypes[$i],
             "detail_value" => $detailValues[$i]
            ]);
        }
    }
    else{
        $database->update("products", $data_to_used, [
            "product_id" => $product_id
        ]);
        $database->delete("product_details", [
                "product_id" => $product_id
        ]);
        for($i = 0; $i < count($detailTypes); $i++){
            if($detailValues[$i] !== "")
            $database->insert("product_details",[
                "product_id" => $product_id,
                "detail_type_id" => $detailTypes[$i],
                "detail_value" => $detailValues[$i]
            ]);
        }
    }
    ?>
<script>function returnInsert() {
        window.location.href = "index.php";
    }
    returnInsert();
</script>
