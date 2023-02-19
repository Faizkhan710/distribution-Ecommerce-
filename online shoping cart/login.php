<?php
session_start();
$_SESSION['cid'] = $row['c_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Document</title>
</head>
<body>
<form method="post">

<div class="login">
  <div class="heading">
    <h2>Sign in</h2>
    <form action="#">

      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Username or email">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" placeholder="Password">
        </div>

        <button type="submit" name="login" class="float">Login</button>
       </form>
 		</div>
 </div>


</form>
</body>
</html>