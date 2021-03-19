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
  <link rel="stylesheet" href="assets/vendor/swiper/package/css/swiper.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
<?php include "nav-header1.php"?>
<!-- ======= Hero Section ======= -->
<?php 
$stmt = $DB_con->prepare('SELECT id, img FROM banners ORDER BY id DESC');
$stmt->execute();
if ($stmt->rowCount() > 0) {
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    extract($row);
?>
<section id="hero2" style="background-image: url('../admin/uploads/<?php echo $row['img']; ?>');
  background-size: 100%;
  background-repeat: no-repeat;">
<?php
        }
      }
?>
<?php
  if(isset($errMSG)){ 
?>
<div class="alert alert-danger container">
  <strong><?php echo $errMSG; ?></strong>
</div>
<?php
  }
?>
<div class="row">
  <div class="col-lg-6 col-md-6 hero-img" data-aos="zoom-in" data-aos-delay="500">
    <img src="assets/img/logosemfundo.png" class="img-fluid animated" alt="">
  </div>
  <div class="col-lg-6 col-md-6 hero-text" data-aos="fade-up" data-aos-delay="200">
    <div class="container pt-lg-4">
      <h1>A melhor água do PIAUÍ</h1>
      <h2>Conheça os produtos ÁguaDaBoaFonthe, água de qualidade</h2>
      <div>
      <a href="#about" class="btn-get-started scrollto">Conheça agora</a>
      </div>
    </div>
  </div>
</div>
</section>

<!-- End Hero -->
<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
<div class="container">
  <div class="section-title">
    <h2>Produtos</h2>
    <p>Entregamos a melhor água na medida ideal pra você, conheça nossa variedade de produtos</p>
  </div>
  <div class="row justify-content-center">
  <div class="owl-carousel owl-produtos wow fadeInUp">
  
    <?php
      $stmt = $DB_con->prepare("SELECT nome, img FROM produtos ORDER BY id DESC");
      $stmt->execute();
      if($stmt->rowCount() > 0) {
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
      extract($row);
    ?>
    <div class="produto-item">
    <div data-aos="zoom-in" data-aos-delay="100">
      <div class="icon-box">
      <img class="img-center img-fluid" src="../admin/uploads/<?php echo $row['img']; ?>">
        <h4 class="text-center"><a href="produto.php?nome=<?php echo $nome ?>"><?php echo $nome ?></a></h4>
        <div class="row">
          <div class="col-lg-6 pb-2">
            <div class="container info-box">
              <p>pH<br>8.1</p>
            </div>
          </div>
          <div class="col-lg-6 pb-2">
            <div class="container info-box">
              <p>Sódio<br>24,04</p>
            </div>
          </div>
          <a href="produto.php?nome=<?php echo $nome ?>"><h5 class="img-center">Saiba Mais</h5></a>
        </div>
      </div>
    </div>
  </div>
    <?php 
        }
      }
    ?>
  </div>
  </div>

</div>
</section><!-- End Services Section -->
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Quem Somos</h2>
        </div>

        <div class="row content justify-content-center">
          <div class="col-lg-8 pt-4 pt-lg-0">
            <p>
                ÁguaDaBoaFonthe foi criada com o objetivo de entregar a melhor água do Brasil. Com equipamentos de ponta nossa agua adicionada de sais foi pensada no equilibrio ideal para o nosso organismo.
            </p>
            <a href="quem_somos.php" class="btn-learn-more">Saiba Mais</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Blog</h2>
          <p>Saiba mais sobre o principal benéficos do mineral mais importante pra nosso corpo</p>
        </div>

        <div class="row">
        <div class="owl-carousel owl-produtos wow fadeInUp">
        <?php
          $stmt = $DB_con->prepare("SELECT titulo, sub_titulo, img1 FROM posts ORDER BY id DESC");
          $stmt->execute();
          if($stmt->rowCount() > 0) {
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
          extract($row);
        ?>
          <div class="produto-item">
          <div data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
            <img class="img-center img-fluid" src="../admin/uploads/<?php echo $row['img1']; ?>">
              <h4 class="pt-2"><a href="post.php?p=<?php echo $titulo ?>"><?php echo $titulo ?></a></h4>
              <p><?php echo $sub_titulo ?></p>
            </div>
          </div>
          </div>
          <?php 
              }
            }
          ?>
        </div>
        </div>
        </div>

      </div>
    </section><!-- End Services Section -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Contato</h2>
      <p>Entre em contato conosco.</p>
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
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/swiper/package/js/swiper.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script>
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      loop: true,
      loopedSlides: 5, //looped slides should be the same
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
</script>
</body>

</html>