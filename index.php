<!DOCTYPE html>
<html>
<head>
<?php include "Head.php";?>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <br>
            <form method="get" action="Search.php">
                <div class="col-md-6">
                    <input type="text" name="keyword" class="form-control input-xs" placeholder="Search.." />
                </div>
                <div class="col-md-4">
                    <select name="category" class="form-control" id="sel1">
                        <option value="0">All Categories</option>
                        <?php include "DataObjects/Categories.php"?>
                    </select>
                </div>
                <div class="col-md-2">
                    <button value="search" class="btn btn-info btn-md" type="submit">
                        <i class="glyphicon glyphicon-search"> Search</i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
            <br>
            <div class="col-md-6">
                <a href="LoginPage.php">
                <button class="btn btn-info btn-md" type="button">
                    <i class="glyphicon"> Admin</i>
                </button>
                </a>
            </div>
        </div>
    </div>

    <h1><strong>WELCOME</strong></h1>
    <h4>Trending products:</h4>

    <div>
        <?php include "DataObjects/RandomProducts.php"?>
    </div>
</div>
</body>
</html