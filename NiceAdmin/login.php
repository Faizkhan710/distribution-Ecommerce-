<?php 
include "config.php";


    session_start();
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass= $_POST['pass'];

    $sql = "SELECT * from admins where email = '$email' AND passw = '$pass'";
    $query = mysqli_query($conn, $sql);
    if(!$query){
        die(mysqli_error($conn));
      }
      else { echo " Data is fetched";

        $row = mysqli_fetch_array($query);
        if(mysqli_num_rows($query)>0){        
          $_SESSION['useremail']=$row['email'];
        $_SESSION['userpass']=$row['passw'];
            header("location:forms.php");
        }
    else {
        echo "Access Denied";
    }
    
    }

}
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        
<form  method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email"  aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputpass" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputpass" name="pass"  aria-describedby="passHelp">
    <div id="passHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <button type="submit" name="login" class="btn btn-primary">Login</button>
   <a href="reregistration.php"><button  type="submit" name="registar" class="btn btn-primary">registration</button></a>

</form>
    </body>
    </html>