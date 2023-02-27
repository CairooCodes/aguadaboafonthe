<?php
require_once './admin/dbconfig.php';
include './admin/lead-insert.php';
$nome2 = $_GET['nome'];
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
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="home.php">Página Inicial</a></li>
          <li><?php echo $nome2 ?></li>
        </ol>
        <h2><?php echo $nome2 ?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
    <?php
	
	$stmt = $DB_con->prepare("SELECT id, nome, descricao, img,img2 FROM produtos where nome='$nome2'");
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
  ?>
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img class="img-center" src="../admin/uploads/<?php echo $row['img2']; ?>" onerror="this.src='../admin/assets/img/sem.jpg'">
            <img class="img-center" src="../admin/uploads/<?php echo $row['img']; ?>" onerror="this.src='../admin/assets/img/sem.jpg'">
          </div>

          <div class="portfolio-info">
            <h3>Garrafa de <?php echo $nome ?></h3>
            <ul>
              <li><strong>pH</strong>: 8,1</li>
              <li><strong>Sódio</strong>: 24,04</li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2><?php echo $descricao ?></h2>
        </div>

      </div>
      <?php 
    }
  }?>
    </section><!-- End Portfolio Details Section -->
    <!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Gostou?</h2>
      <p>Entre em contato conosco agora!
      </p>
    </div>
    <div class="row">
      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Localização:</h4>
            <p>Endereço</p>
          </div>
          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email:</h4>
            <p>contato@aguadafonthe.com.br</p>
          </div>
          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Whats-App:</h4>
            <p>+55 869000000</p>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d508606.4587124916!2d-43.06506311860183!3d-5.185697911647698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x78e34b4df8526b1%3A0x2c29cfbdbb7d7359!2sTeresina%20-%20PI!5e0!3m2!1spt-BR!2sbr!4v1606470478685!5m2!1spt-BR!2sbr"  frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="" method="POST" autocomplete="off" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Nome</label>
              <input type="text" name="nome" class="form-control" id="nome"/>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Email</label>
              <input type="email" class="form-control" name="email" id="email" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Whats-App</label>
              <input type="text" name="whats" class="form-control" id="whats"/>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Assunto</label>
              <select  name="opc" id="opc" class="form-control">
                <option value='atendimento'>Atendimento</option>
                <option value='financeiro'>Financeiro</option>
                <option value='comercial'>Comercial</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="nome">Mensagem</label>
            <textarea class="form-control" name="mensagem" rows="10" placeholder="Deixe uma mensagem para nós" ></textarea>
          </div>
          <div class="text-center"><button type="submit" name="submit">Enviar</button></div>
        </form>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->
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