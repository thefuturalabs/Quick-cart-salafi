<?php
session_start();
include 'connection.php';
if(isset($_POST['sub'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];

   $query =  mysqli_query($con,"select * from login where username='$user' and password = '$pass' and status = '1'");
    if(mysqli_num_rows($query)>0){
       $data = mysqli_fetch_assoc($query);
       $_SESSION['login_id'] = $data['login_id'];
       

       if($data['type']=='admin'){

        
          header('location:home.php');

       }
       if($data['type']=='shop'){

        header('location:shop_home.php');

       }
     

    }
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

<body style="background-image: url('https://www.elegantthemes.com/blog/wp-content/uploads/2013/09/bg-8-full.jpg');">

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="cta d-none d-md-block">
        <a href="market_reg.php" class="scrollto">SuperMarket Registration</a>

      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  

  <!-- ======= Hero Section ======= -->
 <!-- End Hero -->

  <main id="main" >
   

<br><br><br><br>
    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
    <p style="background-image: url('https://www.elegantthemes.com/blog/wp-content/uploads/2013/09/bg-8-full.jpg');">

      <div class="container" >

        <div class="row">
          <center>
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
            <form method="post" class="">
            <p class="description"><img src="https://www.creativefabrica.com/wp-content/uploads/2018/10/Shopping-cart-logo-by-DEEMKA-STUDIO-580x406.jpg" height="100" width="120" alt=""></p>

              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="text" name="username" class="form-control" id="name" placeholder="Username" required>
                </div>
                
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="password" id="subject" placeholder="Password" required>
              </div>
              <br><br>
              <button name="sub">LOGIN</button>
             </div>
            </form>
            </div>
            

          </div>
          </center>
        </div>

      </div>
    </p>
    </section><!-- End Icon Boxes Section -->

   

  </main><!-- End #main -->

 

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