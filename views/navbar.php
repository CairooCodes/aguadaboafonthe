<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
  <div class="container-fluid container-xl d-flex justify-content-between">
    <div>
      <a href="home.php" class="logo back-to-top d-flex align-items-center">
        <img src="assets/img/logo-natal.png" alt="">
      </a>
    </div>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="home.php">Home</a></li>
        <li><a class="nav-link" href="quem-somos.php">Quem Somos</a></li>
        <li><a class="nav-link" href="home.php#products">Produtos</a></li>
          <!--<ul>
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
        </ul>-->
    </nav>
    <div>
      <a class="getstarted scrollto back-to-top2" href="https://api.whatsapp.com/send?phone=55869994807384&text=Olá%20Água%20da%20Boa%20Fonthe%20visitei%20o%20site%20e%20gostaria%20de%20mais%20informações">LIGUE AGORA <i class="bi bi-phone"></i></a>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </div>
    <!-- .navbar -->
  </div>
</header>
<!-- End Header -->

<div class="contact2">
  <div class="btn-contact">
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class="bi bi-chat-left-fill"></i>
    </button>
  </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="text-center">Preencha o formulário e recebe atendimento especializado</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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
              <label for="nome"><h3 class="text-center">Assunto</h3></label>
              <select name="opc" id="opc" class="form-control">
                <option value='atendimento'>Atendimento</option>
                <option value='financeiro'>Financeiro</option>
                <option value='comercial'>Comercial</option>
              </select>
            </div>
          </div>
          <div class="form-group mb-2">
            <label for="nome"><h3 class="text-center">Mensagem</h3></label>
            <textarea class="form-control" name="mensagem" rows="10" placeholder="Deixe uma mensagem para nós"></textarea>
          </div>
          <div class="text-center"><button type="submit" class="btn btn-modal" name="submit">Enviar</button></div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>