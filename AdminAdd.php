<?php
    include "DataObjects/DatabaseInstance.php";
    $productData = [];
    if(isset($_GET["productId"])) {
        $productData = $database->select("products","*", [
            "product_id" => $_GET["productId"]
        ]);
    }
?>
<!DOCTYPE HTML>
<html>
<head>
    <?php include "Head.php";?>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <title>Add Product</title>
    <style>
        .form-control {
            width: 30%;
        }
    </style>
</head>
<body>
    <?php include "navbar.php";?>
    <div class="container-fluid" id="mainDiv">
        <div class="row" id="rowDiv">
            <div class="col-sm-10" style="margin-top: 80px" id="colDiv">
                <div class="container" id="contDiv">
                    <form method="get" action="AddProduct.php" id="mainForm">
                        <div id="formDiv">
                        <input type="text" name="typeIndex" style="visibility: hidden" value="<?php if (isset($_GET["productId"]))echo $_GET["productId"]; else echo 0;?>">
                        <div class="form-group">
                            <label for="product_name">Product name:</label>
                            <br>
                            <input class="form-control" name="product_name" type="text" value="<?php if (isset($_GET["productId"]))echo $productData[0]["product_name"]; ?>" name="product_name" id="product_name">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="product_category_id">Category:</label>
                            <br>
                            <select class="form-control" name="product_category_id" id="product_category_id">
                            <?php $_GET["selected"] = $productData[0]["product_category_id"];
                            include "DataObjects/Categories.php"
                            ?>
                            </select>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <br>
                            <textarea class="form-control" rows="4" name="product_description" id="product_description"><?php if (isset($_GET["productId"]))echo $productData[0]["product_description"]; ?></textarea>
                            <br>
                        </div>
                        <div class="form-group" id="detailsDiv">
                            <p>Details:</p>
                            <?php if(isset($_GET["productId"])){
                                $details = $database->select("product_details", "*",[
                                  "product_id" => $_GET["productId"]
                                ]);
                                foreach ($details as $detail){
                                    $_GET["selected"] = $detail["detail_type_id"];
                                    echo "<select name='detail_type_id' style='display:inline;' class='form-control'>";
                                    include "DataObjects/Details.php";
                                    echo "</select>";
                                    echo "<input type='text' name='detail_value' value='" . $detail["detail_value"] . "' class='form-control' style='display: inline'>";
                                    echo "<br>";
                                }
                            }?>
                        </div>
                            <button type="button" class="btn btn-info btn-md" onclick="addInput()">Add Detail</button>
                        </div>
                        <br/>
                        <button type="submit" class="btn btn-info btn-lg">Add</button>
                    </form>
                </div>
        </div>
    </div>
</div>
</body>
</html>
