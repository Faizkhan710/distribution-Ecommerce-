<?php
$server = "localhost";
$user = "root";
$pwd = "";
$dbname = "e_project";

$conn = mysqli_connect($server, $user, $pwd, $dbname);

$cart_id = $_GET['id'];
$sql1 = "DELETE FROM cart where cart_id = '$cart_id'";
$query = mysqli_query($conn, $sql1);

if(!$query){
    die(mysqli_error($conn));
}
else{ header("location:cart.php");}

?>