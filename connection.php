<?php
$servername = "localhost"; //replace it with your database server name
$username = "root";  //replace it with your database username
$password = "0924";  //replace it with your database password
$dbname = "blog";
$conn = mysqli_connect($servername, $username, $password, $dbname);
 mysqli_query($conn,"SET NAMES UTF8");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>