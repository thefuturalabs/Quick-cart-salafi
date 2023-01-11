<?php
session_start();
$shop = $_SESSION['login_id'];
include 'connection.php';
$query = mysqli_query($con, "select customers.name,request.req_id,customers.email,request.status,customers.mobile,customers.place,product.product,request.quandity,product.price from request join customers on request.cus_id = customers.login_id join product on product.product_id = request.product_id ");
// $query1 = mysqli_query($con, "select * from request join customers on request.cus_id = customers.login_id join product on product.product_id = request.product_id ");

// $reque = mysqli_fetch_assoc($query1);
// $req = $reque['req_id'];
// echo $req;

$sts =  mysqli_query($con, "select * from request ");
$st = mysqli_fetch_assoc($sts);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Quick Cart</title>
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
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    tr {
      background-color: #f5f5f5;
    }

    th,
    td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ccc;
    }

    tr:hover {
      background-color: #cdcdcd;
    }

    .a {
      border-radius: 25px;
    }
  </style>
</head>

<body style="background-color:#c20909e8;">

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="cta d-none d-md-block">
        <a href="logout.php" class="scrollto">LOGOUT</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <?php
  include 'shop_header.php';
  ?>
  <br>
  <!-- ======= Hero Section ======= -->
  <!-- End Hero -->

  <main id="main">
    <br><br><br><br><br><br>
    <!-- ======= Icon Boxes Section ======= -->
    <center>
      <div style="width: 30cm;">

        <table class="a">
          <tr>
            <th>Sl no</th>
            <th> Name</th>
            <th>Place</th>
            <th> Mobile</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>total</th>
            <th></th>
          </tr>
          <?php
          $count = 0;
          while ($row = mysqli_fetch_assoc($query)) {
            $price = $row['price'];
            $quandity = $row['quandity'];
            $tot = $price * $quandity;
            $count++;
          ?>
            <tr>
              <td><?php echo $count; ?></td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['place'] ?></td>
              <td><?php echo $row['mobile'] ?></td>
              <td><?php echo $row['product'] ?></td>
              <td><?php echo $row['quandity'] ?></td>
              <td><?php echo $row['price'] ?></td>
              <td><?php echo $tot; ?></td>
             
              <?php
            
              if ($row['status'] == '0') {
              ?>
              <td>
               <a href="status.php?id=<?php echo $row['req_id']; ?>" class="btn btn-primary">Confirm</a>
               </td>
             <?php
              }
              ?>
              <?php
               if ($row['status'] == '1') {
              ?>
              <td>
                <a href="" class="btn btn-primary">Packing</a>
                </td>
              <?php
              }
              ?>
              <?php
               if ($row['status'] == '2') {
              
              ?>
<td>
              <a href="" class="btn btn-primary">Delivered</a>
              </td>
              <?php
              }
              ?>
                </td>

            <?php
          }
            ?>


        </table>
      </div>
    </center>
    <br>
    <!-- ======= About Us Section ======= -->


    <!-- ======= Clients Section ======= -->


    <!-- ======= Why Us Section ======= -->


    <!-- ======= Services Section ======= -->

    <!-- ======= Cta Section ======= -->


    <!-- ======= Portfoio Section ======= -->


    <!-- ======= Team Section ======= -->

    <!-- ======= Pricing Section ======= -->


    <!-- ======= Frequently Asked Questions Section ======= -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>



        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">





  </footer><!-- End Footer -->

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