<!DOCTYPE HTML>
<html>
<head>
    <?php include "Head.php";?>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <title>Admin Page</title>
</head>
<body>
    <?php include "navbar.php"; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <h1>Admin Page</h1>
                <br>
                <nav class="navbar navbar-default navbar-fixed-side">
                    <div class="navbar-collapse collapse left">
                        <div class="dropdown">
                            <ul class="nav navbar-nav left">
                                <li><a href="#">Add Product</a></li>
                                <li><a href="#">Insert Product</a></li>
                                <li><a href="#">Delete Product</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-sm-10" style="margin-top: 60px">
                <div class="container">
                    <div class="jumbotron" style="background-color: #2989b4;">
                        <h1 style="text-align: center; color: white;">Welcome to Admin Page</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

