<?php
require_once './admin/dbconfig.php';
include './admin/lead-insert.php';
$titulo = $_GET['p'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Água DaBoaFonthe - <?php echo $titulo; ?></title>
  <meta content="<?php echo $titulo; ?>" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logofonte.png" rel="icon">
  <link href="assets/img/logofonte.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<?php include "nav-header1.php"?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Blog</li>
        </ol>
        <h2><?php echo $titulo ?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="row container">
      <?php
      $stmt = $DB_con->prepare("SELECT id, titulo, sub_titulo, texto_1, texto_2, texto_3, img1,img2 FROM posts where titulo='$titulo'");
      $stmt->execute();

      if($stmt->rowCount() > 0)
        {
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
          {
        extract($row);
      ?>
        <div class="col-md-6">
          <div class="portfolio-details-container">
              <img src="../admin/uploads/<?php echo $row['img1']; ?>" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-md-6">
        <div class="portfolio-description">
          <h2><?php echo $titulo; ?></h2>
          <p>
            <?php echo $sub_titulo; ?>
          </p>
          <p>
            <?php echo $texto_1; ?>
          </p>
          <p>
            <?php echo $texto_2; ?>
          </p>
          <img src="../admin/uploads/<?php echo $row['img2']; ?>" class="img-fluid" alt="">
        </div>
        </div>
      <?php 
        }
      }
      ?>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php include "footer.php"?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>