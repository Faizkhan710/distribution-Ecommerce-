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
                <th scope="col">p_name</th>
                <th scope="col">p_qty</th>
                <th scope="col">p_price</th>
                <th scope="col">p_desc</th>
                <th scope="col">p_catg</th>
                <th scope="col">delete</th>
                <th scope="col">edit</th>

              </tr>
            </thead>
            <tbody>

            <?php
            
            $sql = "SELECT * FROM products p JOIN categories c ON p.cat_idfk= c.cat_id";
                $query = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($query)){

                

            ?>

              <tr>
                <th scope="row"><?php echo $row['p_name'];?></th>
                <td><?php echo $row['p_qty'];?></td>
                <td><?php echo $row['p_price'];?></td>
                <td><?php echo $row['p_id'];?></td>
                <td><?php echo $row['cat_name'];?></td>
                <td>
                      <a href="delete.php?id=<?php echo $row['p_id'];?>" class="tm-product-delete-link">
                        <i class="bi bi-trash"></i>
                      </a>
                    </td>
                    <td>
                      <a href="edit.php?id=<?php echo $row['p_id'];?>" class="tm-product-delete-link">
                      <i   class="bi bi-pen-fill"></i>
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