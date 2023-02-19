<?php
$server = "localhost";
$user = "root";
$pwd = "";
$dbname = "e_project";

$conn = mysqli_connect($server, $user, $pwd, $dbname);


$p_id=$_GET['id'];

$check_if_exists ="SELECT * from cart where p_idfk= '$p_id'";
$run_check_if_exists= mysqli_query($conn, $check_if_exists);

if(mysqli_num_rows($run_check_if_exists) > 0){
    $get_qty="select c_quant from cart where p_idfk='$p_id' ";
    $run_get_qty= mysqli_query($conn, $get_qty);

    $row= mysqli_fetch_array($run_get_qty);
    $quantity=$row['c_quant'];
$quantity= $quantity +1 ;

$safe_updates= "SET SQL_SAFE_UPDATES=0";

 $update_qty = "UPDATE cart SET c_quant = '$quantity' where p_idfk = '$p_id'";
 $run_safe_updates= mysqli_query($conn, $safe_updates);
 $run_update_qty = mysqli_query($conn, $update_qty);
 header("location:cart.php");
}
else {
    $addproduct_tocart= "INSERT INTO Cart(p_idfk, c_quant) VALUES ('$p_id', 1)";

$run_query= mysqli_query($conn, $addproduct_tocart);
if(!$run_query){
    die();
}
else header("location:cart.php");
}


?>