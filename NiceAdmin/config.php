<?php

$server = "localhost";
$user = "root";
$pwd = "";
$db = "E_project";
$conn = mysqli_connect($server, $user, $pwd,$db);
if(!$conn){
    die(mysqli_error($conn));
}
else {
echo "Connection is Established <br>";
}
?>