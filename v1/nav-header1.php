<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center">
    <a class="logo mr-auto" href="index.php"><img src="assets/img/logofonte.png" width="150"></a>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="#about">Quem Somos</a></li>
        <li><a href="#services">Produtos</a></li>
      </ul>
    </nav><!-- .nav-menu -->
    <a href="#about" class="get-started-btn scrollto d-none d-sm-block">Contato</a>
  </div>
</header><!-- End Header -->

<div class="contacto">
    <div class="btn-contact">
      <button aria-label="Abrir Contato" type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
        <i class="bx bxl-whatsapp"></i>
      </button>
    </div>
  </div>
  <!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-poppins" id="exampleModalCenterTitle">Entre em contato</h5>

        </div>
        <div class="modal-body">
          <div class="form">
            Dúvidas ou mais informações? Preencha o formulário e receba atendimento especializado
            <br>
            <div class="form pt-3">
              <form action="" method="POST">
                <div class="row pb-3">
                  <div class="form-group col-lg-6 col-6">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu nome" required>
                  </div>
                  <div class="form-group col-lg-6 col-6">
                    <input size="20" maxlength="14" type="tel" class="form-control" name="whats" placeholder="Seu número" required>
                  </div>
                </div>
                <div class="form-group pb-3">
                  <input type="text" class="form-control" name="email" id="email" placeholder="E-mail" required />
                </div>
                <div class="form-group pb-3">
              <label for="name">Assunto</label>
              <select  name="opc" id="opc" class="form-control">
                <option value='atendimento'>Atendimento</option>
                <option value='financeiro'>Financeiro</option>
                <option value='comercial'>Comercial</option>
              </select>
            </div>
                <div class="form-group pb-3">
                  <textarea class="form-control" name="mensagem" rows="3" placeholder="Esreva sua mensagem" required></textarea>
                </div>
                <input type="hidden" class="form-control" type="text" name="vendendor" value="" />
                <input type="hidden" name="tipo" value="2">
                <div class="text-center"><button type="submit" class="btn btn-primary" name="submit">Enviar</button></div>
              </form>
              <p class="text-center pt-3">OU</p>
              <div class="row">
                <div class="col-4">
                  <a>
                    <div class="container-a-w rounded">
                      <i class="fa fa-whatsapp"></i> WhatsApp
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a href="">
                    <div class="container-a-i rounded">
                      <i class="fa fa-instagram"></i> Instagram
                    </div>
                  </a>
                </div>
                <div class="col-4">
                  <a href="">
                    <div class="container-a-f rounded">
                      <i class="fa fa-facebook"></i> Facebook
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>