<?php

require_once 'sql_connections/MySqlConnection.php';

$host = "127.0.0.1";
$db_user = "testuser";
$db_pass = "testuser";
$db_name = "db_test";

$conn = MysqlConnection::getConnection();

if(mysqli_connect_errno()){
    echo "Error connection to the DB: ".mysqli_connect_error();
    die();
}



