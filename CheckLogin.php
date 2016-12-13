<?php
include_once "DataObjects/DatabaseInstance.php";
$user = $_POST["username"];
$password = md5($_POST["password"]);
$login_check = $database->count("users",[
    "AND" => [
    "user_name" => $user,
    "user_password" => $password
    ]
]);
if($login_check === 1){
    session_start();
    $_SESSION["id"] = 1;
    ?>
    <script>function trueLogin() {
            window.location.href = "index.php";
        }
        trueLogin();
        </script>
    <?php
}
else{
    ?>
    <script>function invalidLogin() {
            window.location.href = "LoginPage.php";
        }
        invalidLogin();
    </script>
    <?php
}
