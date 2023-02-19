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
    $contact = $_POST['contact']; 
    $desc = $_POST['date'];
    
  
    $desc = str_replace('/', '-', $desc );
$myNewDate = date("Y/m/d", strtotime($desc));

   
    $email = $_POST['email']; 
    $des = $_POST['did']; 

   $sql = "INSERT INTO `employees`(`emp_name`, `desi_idfk`, `emp_joiningdate`, `emp_phone`, `emp_email`) VALUES ('$name','$des','$myNewDate','$contact','$email')";
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
    <div class="col-lg-9">
<!-- <img src="../myadmin/images/" alt=""> -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">General Form Elements</h5>

          <!-- General Form Elements -->
          <form method="post" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">employee name</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control">
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="did" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <?php
                      $getcat= "SELECT * from desination";
                      $rungetcat= mysqli_query($conn, $getcat);
                      while($row= mysqli_fetch_array($rungetcat)){
                      ?>
                      <option value="<?php echo $row['desig_id'] ?>"><?php echo $row['desig_name'] ?></option>
                      <?php
                      }
                      ?>
                    </select>
                  </div>
                </div>
            <div class="row mb-3">
              <label for="" id="datepicker" class="col-sm-2 col-form-label">joining date</label>
              <div class="col-sm-10">
                <input type="date" name="date" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="contact" class="col-sm-2 col-form-label">contact number</label>
              <div class="col-sm-10">
                <input  type="number" name="contact" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="contact" class="col-sm-2 col-form-label">email number</label>
              <div class="col-sm-10">
                <input  type="email" name="email" class="form-control">
              </div>
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
  </div>
</section>

</main><!-- End #main -->

<?php

include "footor.php";
                    }
?>

</body>

</html>