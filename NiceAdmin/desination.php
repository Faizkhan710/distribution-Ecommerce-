<?php
session_start();
if(!isset($_SESSION['useremail'],
$_SESSION['userpass'])){
header("location:login.php");
}
else {
include "header.php";
include "config.php";

 if(isset($_POST['submit'])){
    $name = $_POST['name'];  

    
            $sql = "INSERT INTO `desination`(`desig_name`) VALUES ('$name')";

    $query = mysqli_query($conn, $sql);

    if(!$query){
        die(mysqli_error($conn));
    }
    else{echo "query is running";
    }
  }
?>
 <?php
include "aside.php";
 ?>



  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
  <div class="row">
    <div class="col-lg-6">
<!-- <img src="../myadmin/images/" alt=""> -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">designation Form</h5>

          <!-- General Form Elements -->
          <form method="post" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">designation name</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control">
              </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Submit Button</label>
              <div class="col-sm-10">
                <button type="submit" name="submit" class="btn btn-primary">Submit Form</button>
              </div>
            </div>

          </form><!-- End General Form Elements -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->

<?php

include "footor.php";
}
?>

</body>

</html>