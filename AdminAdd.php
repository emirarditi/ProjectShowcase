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
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <h1>Admin Page</h1>
                <br>
                <nav class="navbar navbar-default navbar-fixed-side">
                    <div class="navbar-collapse collapse left">
                        <div class="dropdown">
                            <ul class="nav navbar-nav left">
                                <li><a href="AdminAdd.php">Add Product</a></li>
                                <li><a href="#">Insert Product</a></li>
                                <li><a href="#">Delete Product</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-sm-10" style="margin-top: 80px">
                <div class="container">
                    <form>
                        <div class="form-group">
                            <label for="product_name">Product name:</label>
                            <br>
                            <input class="form-control" type="text" name="product_name" id="product_name">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="category">Category:</label>
                            <br>
                            <input class="form-control" type="text" name="category" id="category">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="category_att">Category attribute:</label>
                            <br>
                            <input class="form-control" type="text" name="category_att" id="category_att">
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <br>
                            <textarea class="form-control" rows="4" name="description" id="description"></textarea>
                            <br>
                        </div>
                        <button class="btn btn-info btn-lg">Add</button>
                    </form>
                </div>
        </div>
    </div>
</div>
</body>
</html>
