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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <?php include "views/navbar.php"; ?>

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
          <a href="https://api.whatsapp.com/send?phone=86994807384&text=Olá%20Água%20da%20Boa%20Fonthe%20visitei%20o%20site%20e%20gostaria%20de%20mais%20informações" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
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
    <section id="products" class="pricing">
      <div class="container">
        <header class="section-header">
          <p>NOSSOS PRODUTOS</p>
          <h2>Família dos produtos da Água da Boa Fonthe</h2>
        </header>
        <div class="clients-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <?php
            $stmt = $DB_con->prepare("SELECT nome, img FROM produtos ORDER BY id ASC");
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
                      <li><?php echo $nome ?> DE AGÚA ADICIONADA DE SAIS MINEIRAS</li>
                    </ul>
                    <a href="https://api.whatsapp.com/send?phone=86994807384&text=Olá%20Água%20da%20Boa%20Fonthe%20visitei%20o%20site%20e%20gostaria%20de%20mais%20informações" class="btn-buy">SAIBA MAIS</a>
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
                    <p>Teresina, PI</p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="info-box">
                    <i class="bi bi-telephone"></i>
                    <h3>Telefone</h3>
                    <p>+55 (86) 99480-7384 Whatsapp<br>+55 (86) 99512-2319 </p>
                  </div>
                </div>
                <div class="col-6">
                  <div class="info-box">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <p>atendimento@aguadaboafonthe.com.br</p>
                    <p>comercial@aguadaboafonte.com.br</p>
                    <p>financeiro@aguadaboafonthe.com.br</p>

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
              <h3 class="text-center">Preencha o formulário e recebe atendimento especializado</h3>
              <form action="" method="POST" autocomplete="off" class="php-email-form">
                <div class="row mb-2">
                  <div class="form-group col-md-6">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu nome" />
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" name="whats" class="form-control" id="whats" placeholder="Whats-App" />
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-12 mb-2">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                  </div>
                  <div class="form-group col-md-12 mb-2">
                    <label for="nome">Assunto</label>
                    <select name="opc" id="opc" class="form-control">
                      <option value='atendimento'>Atendimento</option>
                      <option value='financeiro'>Financeiro</option>
                      <option value='comercial'>Comercial</option>
                    </select>
                  </div>
                </div>
                <div class="form-group mb-2">
                  <label for="nome">Mensagem</label>
                  <textarea class="form-control" name="mensagem" rows="10" placeholder="Deixe uma mensagem para nós"></textarea>
                </div>
                <div class="text-center"><button type="submit" name="submit">Enviar</button></div>
              </form>

            </div>

          </div>

        </div>

      </section>
      <!-- End Contact Section -->

  </main>
  <!-- End #main -->
  <?php include "views/footer.php"; ?>



  <!-- Vendor JS Files -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>