<?php
      include "shared/header.php";
      
      require "shared/config.php";




      ?>
           
        <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(img/hero-banner-alt.jpg)">
          <div class="container py-5">
            <div class="row px-4 px-lg-5">
              <div class="col-lg-6">
                <p class="text-muted small text-uppercase mb-2">New Inspiration 2022</p>
                <h1 class="h2 text-uppercase mb-3">Our Products</h1><a class="btn btn-dark" href="shop.html">Browse collections</a>
              </div>
            </div>
          </div>
        </section>

<div class="row">


<?php
  
  $sql = "SELECT * FROM products p join categories c on p.cat_idfk = c.cat_id";
  $query = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($query)){
  
  ?>
           
           <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product text-center">
                <div class="position-relative mb-3">
                  <div class="badge text-white bg-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="../img/<?php echo $row ['p_image'];?>" alt="not avalible"></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" name="cart" href="addtocart.php?id=<?php echo $row['p_id'];?>">Add to cart</a></li>
                      <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.html"><?php echo $row['p_name']; ?></a></h6>
                <p class="small text-muted"><?php echo $row['p_price']; ?></p>
                <p class="small text-muted"><?php echo $row['cat_name']; ?></p>
              </div>  
           </div>

            <?php  }?>


</div>
            <?php
      include "shared/footer.php";
      ?>