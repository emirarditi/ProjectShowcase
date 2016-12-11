<!DOCTYPE html>
<html>
<head>
<?php include "Head.php";?>
</head>

<body>
<div>
    <?php include "navbar.php"; ?>

    <div class="container-fluid">
        <h1><strong>WELCOME</strong></h1>
        <h4>Trending products:</h4>

        <?php include "DataObjects/RandomProducts.php"?>
    </div>
</div>
</body>
</html