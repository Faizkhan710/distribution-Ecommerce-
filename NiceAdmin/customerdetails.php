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
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">General</li>
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
                <th scope="col">c_id</th>
                <th scope="col">c_name</th>
                <th scope="col">c_phone</th>
                <th scope="col">c_email</th>
                <th scope="col">c_pass</th>
                <th scope="col">c_address</th>

              </tr>
            </thead>
            <tbody>

            <?php
            
            $sql = "SELECT * FROM customers";
                $query = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($query)){

                

            ?>

              <tr>
                <th scope="row"><?php echo $row['c_id'];?></th>
                <td><?php echo $row['c_name'];?></td>
                <td><?php echo $row['c_phone'];?></td>
                <td><?php echo $row['c_email'];?></td>
                <td><?php echo $row['c_address'];?></td>
                <td>
                      </a>
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