<?php
require_once './admin/dbconfig.php';
include './admin/lead-insert.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Água da Boa Fonthe</title>
  <meta content="Água da Boa Fonthe" name="description">

  <meta content="agua, boa, fonthe, sais mineirais, sais, minerais" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex justify-content-between">
      <div>
        <a href="index.html" class="logo back-to-top d-flex align-items-center">
          <img src="assets/img/logo.png" alt="">
        </a>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Quem Somos</a></li>
          <li class="dropdown"><a href="#"><span>Produtos</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <div>
        <a class="getstarted scrollto back-to-top2" href="#about">LIGUE AGORA <i class="bi bi-phone"></i></a>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </div>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container-fluid">
      <?php
      $stmt = $DB_con->prepare('SELECT id, img,img2 FROM banners ORDER BY id DESC');
      $stmt->execute();
      if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          extract($row);
      ?>
          <img src="admin/uploads/banners/<?php echo $row['img']; ?>" class="img-fluid banner-mob" alt="">
          <img src="admin/uploads/banners/<?php echo $row['img2']; ?>" class="img-fluid banner-desk" alt="">
        <?php
        }
      }
      if (isset($errMSG)) {
        ?>
        <div class="alert alert-danger container">
          <strong><?php echo $errMSG; ?></strong>
        </div>
      <?php
      }
      ?>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center">
          <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>LIGUE AGORA</span>
            <i class="bi bi-phone"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= Clients Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <p>NOSSOS PRODUTOS</p>
        </header>
        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <?php
            $stmt = $DB_con->prepare("SELECT nome, img FROM produtos ORDER BY id DESC");
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
            ?>
                <div class="swiper-slide shadow p-4">
                  <div class="box p-4">
                    <h3><a href="produto.php?nome=<?php echo $nome ?>"><?php echo $nome ?></a></h3>
                    <!--<div class="price"><sup>R$</sup>10,00</div>-->
                    <img src="./admin/uploads/produtos/<?php echo $row['img']; ?>" class="img-fluid" alt="">
                    <ul>
                      <li>20 LITROS DE AGÚA ADICIONADA DE SAIS MINEIRAS</li>
                    </ul>
                    <a href="#" class="btn-buy">SAIBA MAIS</a>
                  </div>
                </div>
            <?php
              }
            }
            ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <!-- ======= Recent Blog Posts Section ======= -->
      <section id="recent-blog-posts" class="recent-blog-posts">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>Blog</h2>
            <p>Últimas do Blog</p>
          </header>

          <div class="row">
            <?php
            $stmt = $DB_con->prepare("SELECT titulo, img1,data_criacao FROM posts ORDER BY id DESC");
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
              while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
            ?>
                <div class="col-lg-4">
                  <div class="post-box">
                    <div class="post-img"><img src="./admin/uploads/blog/<?php echo $row['img1']; ?>" class="img-fluid" alt=""></div>
                    <span class="post-date">
                      <?php
                      $date = new DateTime($data_criacao);
                      $date2 = $date->format('m');
                      $date3 = $date->format('d');
                      $date4 = $date->format('Y');
                      echo $date3;
                      if ($date2 == 01) {
                        echo " Jan. ";
                      }
                      if ($date2 == 02) {
                        echo " Fev. ";
                      }
                      if ($date2 == "03") {
                        echo " Mar. ";
                      }
                      if ($date2 == 04) {
                        echo " Abr. ";
                      }
                      if ($date2 == 05) {
                        echo " Mai. ";
                      }
                      if ($date2 == 06) {
                        echo " Jun. ";
                      }
                      if ($date2 == 07) {
                        echo " Jul. ";
                      }
                      if ($date2 == "08") {
                        echo " Ago. ";
                      }
                      if ($date2 == "09") {
                        echo " Set. ";
                      }
                      if ($date2 == "10") {
                        echo " Out. ";
                      }
                      if ($date2 == "11") {
                        echo " Nov. ";
                      }
                      if ($date2 == "09") {
                        echo " Dez. ";
                      }
                      echo $date4;
                      ?></span>
                    <a href="post.php?p=<?php echo $titulo ?>">
                      <h3 class="post-title"><?php echo $titulo ?></h3>
                    </a>
                    <a href="blog-singe.html" class="readmore stretched-link mt-auto"><span>Leia mais</span><i class="bi bi-arrow-right"></i></a>
                  </div>
                </div>
            <?php
              }
            }
            ?>



          </div>

      </section>
      <!-- End Recent Blog Posts Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <p>Contato</p>
          </header>

          <div class="row gy-4">

            <div class="col-lg-6">

              <div class="row gy-4">
                <div class="col-6">
                  <div class="info-box">
                    <i class="bi bi-geo-alt"></i>
                    <h3>Localização</h3>
                    <p>Bairro,<br>Teresina, Número 0</p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="info-box">
                    <i class="bi bi-telephone"></i>
                    <h3>Telefone</h3>
                    <p>+55 86 99999999<br>+55 86 99999999</p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="info-box">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Us</h3>
                    <p>comercial@aguadaboafonthe.com.br</p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="info-box">
                    <i class="bi bi-clock"></i>
                    <h3>Funcionamento</h3>
                    <p>Segunda - Sexta<br>9:00 - 18:00</p>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-lg-6">
              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Nome Completo" required>
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                  </div>

                  <div class="col-md-12">
                    <input type="text" class="form-control" name="subject" placeholder="Assunto" required>
                  </div>

                  <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required></textarea>
                  </div>

                  <div class="col-md-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit">Enviar</button>
                  </div>

                </div>
              </form>

            </div>

          </div>

        </div>

      </section>
      <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
            </a>
            <p></p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>MAPA DO SITE</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Quem Somos</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Produtos</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Blog</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Contato</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Produtos</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Garrafa de 330 ML</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Garrafa de 550 ML</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Garrafa de 1 Litro</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Garrafa de 20 Litros</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contato</h4>
            <p>
              Teresina <br> Piauí, PI 535022<br> Brasil <br><br>
              <strong>Telefone:</strong> +55 86 99999 9999<br>
              <strong>Email:</strong> comercial@aguadaboafonthe.com.br<br>
            </p>

          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Água da Boa Fonthe</span></strong>. Todos direitos reservados.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="#">CAIROFELIPEDEV</a>
      </div>
    </div>
  </footer>
  <!-- End Footer -->



  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>