<?php
$servename="db";
$username="capp001";
$password="Ajam2284...";
$dbname="capp001";
//creat connction

$conn = new mysqli($servename,$username,$password, $dbname);
//check the connection
if($conn->connect_error){
    die("connection faild:" . $conn->connect_error);
}


?>