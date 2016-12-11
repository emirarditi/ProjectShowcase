<!DOCTYPE html>
<html>
<head>
    <?php include "Head.php";?>
</head>
    <body>
    <?php include "navbar.php";?>
    <div class="container-fluid">
        <form method="POST" action="CheckLogin.php">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <label for="username">Username:</label>
                    <input type="text" name="username" id="username" placeholder="Username"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Password"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-5">
                    <button type="submit" class="btn btn-info">
                        <i class="glyphicon glyphicon-log-in"> Login</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    </body>
</html>