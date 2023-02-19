<?php
session_start();
if(!isset($_SESSION['useremail'],
$_SESSION['userpass'])){
header("location:login.php");
}
else {
require "config.php";


$p_id = $_GET['id'];
$sql1 = "DELETE FROM products where p_id = '$p_id'";
$query = mysqli_query($conn, $sql1);

if(!$query){
    die(mysqli_error($conn));
}
else{ header("location:PRODUCTdetails.php");};
}

?>