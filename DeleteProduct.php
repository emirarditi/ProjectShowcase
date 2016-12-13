<?php
include "DataObjects/DatabaseInstance.php";
$id = $_GET["productId"];
$database->delete("products",[
   "product_id" => $id
]);

$database->delete("product_details",[
   "product_id" => $id
]);

$database->delete("product_pictures", [
   "product_id" => $id
]);
?>
<script>function returnDelete() {
        window.location.href = "index.php";
    }
    returnDelete();
</script>

