<?php

$DB_HOST =	"localhost";				
$DB_USERNAME = 	"DATABASE USERNAME";				
$DB_PASSWORD = 	"DATABASE PASSWORD";				
$DB_NAME = 	"DATABASE NAME";					

$db_conx = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
?>