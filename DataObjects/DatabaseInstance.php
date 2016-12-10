<?php

include "Libraries/medoo.php";

$database = new medoo([
    'database_type' => 'mysql',
    'database_name' => 'ShowcaseProject',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '12345678',
    'charset' => 'utf8'
]);
