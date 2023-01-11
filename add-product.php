<?php
session_start();
$log = $_SESSION['login_id'];
// var_dump($log);exit();
include 'connection.php';
$data = mysqli_query($con,"select * from category where shop_id = '$log'");
if(isset($_POST['sub'])){
    $category = $_POST['category'];
    $product = $_POST['product'];
    $stock = $_POST['stock'];
    $exp_date = $_POST['exp_date'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    if ($image != "") {
        $filearray = pathinfo($_FILES['image']['name']);
        // var_dump($filearray);exit();

        $file1 = rand();
        $file_ext = $filearray["extension"];




        $filenew = $file1 . "." . $file_ext;
        // var_dump($filenew);exit();
        move_uploaded_file($_FILES['image']['tmp_name'], "assets/img/new/" . $filenew);
        //var_dump($filenew);exit();
    }

    mysqli_query($con,"insert into product(shop_id,product,stock,exp_date,price,cat_id,image)values('$log','$product','$stock','$exp_date','$price','$category','$filenew') ");
    echo"<script>window.location.href='shop_home.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Anyar Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Anyar - v4.9.1
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center " style="background-color: maroon;">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">ADD PRODUCT</a></h1>
      <a href="shop_home.php" class="btn btn-warning">BACK</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

     

    </div>
  </header><!-- End Header -->
<!-- End Hero -->

  <main id="main">

  <br><br><br><br><br>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <!-- <h2>Register</h2> -->
        </div>

        <div class="row mt-1 d-flex justify-content-center" data-aos="fade-right" data-aos-delay="100">

          

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

            <form method="post" role="form" class="" enctype="multipart/form-data">
            <div class="form-group mt-3">
                <select name="category" id="" class="form-control">
                <?php
                while($row = mysqli_fetch_assoc($data)){
                ?>
                    <option value="<?php echo $row['dept_id'] ?>"><?php echo $row['category'] ?></option>
                    <?php
                        }
                    ?>
                </select>
              </div>
              <br>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="product" class="form-control" id="name" placeholder="Product" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="file" class="form-control" name="image" placeholder="" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="stock" id="subject" placeholder="stock" required>
              </div>
              <div class="form-group mt-3">
                <input class="form-control" name="exp_date" rows="5" placeholder="Expiry date" required>
              </div>
              <div class="form-group mt-3">
                <input class="form-control" name="price" rows="5" placeholder="Price" required>
              </div>
             <br>
            
              <br>
              <div class="text-center"><button type="submit" name="sub">ADD</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>