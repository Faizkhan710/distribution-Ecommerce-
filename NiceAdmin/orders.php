<?php
session_start();
if(!isset($_SESSION['useremail'],
$_SESSION['userpass'])){
header("location:login.php");
}
else {
include "header.php";
include "config.php";
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
                <th scope="col">order_id</th>
                <th scope="col">product_id</th>
                <th scope="col">customer_id</th>
                <th scope="col">order_quantity</th>
                <th scope="col">order_total</th>

    </tr>
            </thead>
            <tbody>

           
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