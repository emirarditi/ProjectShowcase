<?php
if (session_status() == PHP_SESSION_NONE)
    session_start();
?>
<!DOCTYPE html>
    <html>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" style="color:white">ShowCase</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php" style="color:white">Home</a></li>
                    <?php if(isset($_SESSION["id"])){ ?>
                        <li><a href="AdminPage.php" style="color:white">Admin</a></li>
                        <li><a href="Logout.php" style="color:white">Logout</a></li>
                    <?php } else {?>
                        <li><a href="LoginPage.php" style="color:white">Login</a></li>
                    <?php } ?>
                </ul>
                <form method="get" class="navbar-form navbar-left" action="Search.php">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control input-xs" placeholder="Search.." />
                        <div class="input-group-btn">
                            <select name="category" class="form-control">
                                <option value="0">All Categories</option>
                                <?php include_once "DataObjects/Categories.php" ?>
                            </select>
                            <button value="search" class="btn btn-info btn-md" type="submit">
                                <i class="glyphicon glyphicon-search"> Search</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </nav>
    </body>
</html>