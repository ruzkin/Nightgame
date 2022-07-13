<?php
/*
$host = "localhost";
$user = "ete33e_2122ls_06";
$password = '144.10D+096!33';
$db_name = "ete33e_2122ls_06";
*/


$host = "";
$user = "";
$password = '';
$db_name = "";
$conn = mysqli_connect($host, $user, $password, $db_name);
if(mysqli_connect_errno()) {
    die("Failed to connect with MySQL: ". mysqli_connect_error());
}
?>
