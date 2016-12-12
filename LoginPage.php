<html>

    <head>
        <?php include "Head.php";?>
        <title>ShowcaseSite Login</title>
    </head>
    <body>
        <div class="container">
            <div class="row" style="margin-left:10px">
                <br>
                <div class="col-sm-5">
                    <h1>Login</h1>
                    <br>
                    <form method="POST" action="CheckLogin.php">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input class="form-control" type="text" name="username" id="username" placeholder="Enter username"/>
                        </div>
                        <div class=" form-group">
                            <label for="password">Password:</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="Enter password"/>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info" type="submit">Login</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-3">
                    <button class="btn btn-info btn-lg" href="index.php"><i class="glyphicon glyphicon-home"> Home</i></button>
                    <button class="btn btn-info btn-lg" href="AdminPage.php"><i class="glyphicon glyphicon-user"> Admin</i></button>
                </div>
            </div>
        </div>
    </body>
</html>