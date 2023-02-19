<?php
session_start();
 require "shared/config.php";
if(isset($_SESSION['cid'])){
  $cid= $_SESSION['cid'];
}

$p_id = ['pid'];

$total= "SELECT sum(c_total) AS total FROM `cart` WHERE c_idfk = '$cid'";

$sql = "INSERT INTO cart ('p_idfk' , 'c_idfk') values('$p_id','$cid')";

?>