<?php
require_once './admin/dbconfig.php';
include './admin/lead-insert.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Água DaBoaFonthe</title>
  <meta content="" name="description">
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

<section id="about"  class="about" style="padding-top:120px">
  <div class="container justify-content-center pt-4 pb-4">
  <?php
    $stmt = $DB_con->prepare('SELECT text_intro,texto1,texto2,texto3,texto4,texto5,img,img2 FROM quem_somos');
    $stmt->execute();
    if($stmt->rowCount() > 0) {
      while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    extract($row);
  ?>
    <p class="text-intro text-center"><?php echo $text_intro ?></p>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <img src="admin/uploads/<?php echo $img; ?>" class="img-fluid wow fadeInUp" onerror="this.src='./img/sem.jpg'" />
        <p class="section-about-1"><?php echo $texto1 ?></p>
        <p class="section-about-1"><?php echo $texto2 ?></p>
        <p class="section-about-1"><?php echo $texto3 ?></p>
        <p class="section-about-1"><?php echo $texto4 ?></p>
        <p class="section-about-1"><?php echo $texto5 ?></p>
        <img src="admin/uploads/<?php echo $img2; ?>" class="img-fluid wow fadeInUp" onerror="this.src='./img/sem.jpg'" />
      </div>

    </div>
  <?php
    }
  }
  ?>
  </div>
  </div>
  </section><!-- #about -->

</main><!-- End #main -->
<?php include "footer.php"?>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>