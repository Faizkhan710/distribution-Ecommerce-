<?php
session_start();
if(!isset($_SESSION['useremail'],
$_SESSION['userpass'])){
header("location:login.php");
}
else {
include "header.php";
include "config.php"
?>

<body>
<?php
include "aside.php";
?>
  <main id="main" class="main">

<div class="pagetitle">
  <h1>General Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="addemployees.php">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">employees</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-10">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Dark Table</h5>

          <!-- Dark Table -->
          <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">NAME</th>
                <th scope="col">emp_designation</th>
                <th scope="col">emp_joiningdate</th>
                <th scope="col">emp_email</th>
                <th scope="col">emp_phone</th>

    </tr>
            </thead>
            <tbody>

            <?php
            
            $sql = "SELECT * FROM employees p JOIN desination c ON p.desi_idfk= c.desig_id";
                $query = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($query)){

                

            ?>

              <tr>
                <th scope="row"><?php echo $row['emp_name'];?></th>
                <td><?php echo $row['desig_name'];?></td>
                <td><?php echo $row['emp_joiningdate'];?></td>
                <td><?php echo $row['emp_phone'];?></td>
                <td><?php echo $row['emp_email'];?></td>
                    </td>

              </tr>

              <?php }?>
            </tbody>
          </table>
          <!-- End Dark Table -->

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