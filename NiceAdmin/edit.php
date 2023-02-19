<?php
session_start();
if(!isset($_SESSION['useremail'],
$_SESSION['userpass'])){
header("location:login.php");
}
else {
include "header.php";
include "config.php";

$p_id = $_GET['id'];
if(isset($_POST['submit'])){
    $name = $_POST['name'];  
    $price = $_POST['price']; 
    $desc = $_POST['desc'];
    $p_qty = $_POST['p_qty']; 
    $CAT  = $_POST ['P_CAT']; 
    $image = $_FILES['image'];


    if(isset($_FILES['image'])){
        $imagename = $_FILES['image']['name'];
        $imagetmpname = $_FILES['image']['tmp_name'];
        $imagesize = $_FILES['image']['size'];
        $imagetype = $_FILES['image']['type'];
        $imageerr = $_FILES['image']['error'];
}

 

        $allowedext = array("jpg", "png", "jpeg", "jfif", "gif");

        $ext = explode('.', $imagename);
        $imageext = strtolower(end($ext));


        if(in_array($imageext, $allowedext) === false){

            $errors[] = "this extension isn't allowed";
        }

        if($imagesize > 2097125){
            $errors[]  = "this file size is not allowed";
        }

        if(empty($errors) == true){
          $imagedata=addslashes(file_get_contents($imagetmpname));
            move_uploaded_file( $imagetmpname, "img/".$imagename );
            
        $sqli1 = "UPDATE products SET p_name = '$name', p_desc = '$desc', p_price = '$price', p_image = '$imagedata', p_qty = '$p_qty'  where p_id = '$p_id'";
 
        $query = mysqli_query($conn, $sqli1);

    if(!$query){
        die(mysqli_error($conn));
    }
    else{echo "query is running";
    }
        }
 else{
   echo "image has errors";
 }


    }
    else{ echo "image is not uploded";};
  

  include "aside.php";
?>
    

 
 
 <main id="main" class="main">
 
 
 <?php $sql2 = "SELECT * FROM products";
       $query2 = mysqli_query($conn, $sql2);
       $row = mysqli_fetch_array($query2)?>
 
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
          <h5 class="card-title">General Form Elements</h5>

          <!-- General Form Elements -->
          <form method="post" enctype="multipart/form-data">
            <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">product name</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control">
              </div>
              <br>
              <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">description</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="desc" style="height: 100px"></textarea>
              </div>
            </div>
              <div class="row mb-3">
              <label for="inputText" class="col-sm-2 col-form-label">product QUANTITY</label>
              <div class="col-sm-10">
                <input type="text" name="p_qty" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">product price</label>
              <div class="col-sm-10">
                <input type="number" name="price" class="form-control">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" name="image" id="formFile">
              </div>
            </div>
            <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Select</label>
                  <div class="col-sm-10">
                    <select class="form-select" name="P_CAT" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option>1</option>
                      <option>2</option>
                    </select>
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
</section>
         </div>
       </div>
 
     </div>
   </div>
 </section>
 
 </main><!-- End #main -->
 
<?PHP
 include "footer.php";
  }
  ?>

</body>

</html>