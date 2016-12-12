<html>
<head>
    <?php include "Head.php";?>
    <title>ShowcaseSite Login</title>
</head>
<body>
<div>
    <?php include "navbar.php"; ?>
<div class="container-fluid">
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
    </div>
</div>
</div>
</body>
</html>