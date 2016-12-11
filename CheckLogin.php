<?php
include "DataObjects/DatabaseInstance.php";
$user = $_POST["username"];
var_dump($user);
$password = md5($_POST["password"]);
var_dump($password);
$login_check = $database->count("Users",[
    "AND" => [
    "user_name" => $user,
    "user_password" => $password
    ]
]);
if($login_check === 1){
    ?>
    <script>function trueLogin() {
            window.location.href = "AdminPage.php";
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
