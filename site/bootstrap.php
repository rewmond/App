<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hDC Agency - a sua agência web</title>
  <!-- Fonte -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
  <!-- Estilos -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Scripts (jQuery não pode ser o slim que vem do Boostrap) -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
  <!-- Progress Bar -->
  <script src="progressbar.min.js"></script>
  <!-- Parallax -->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>

<body>
  <header>
    <div class="container" id="nav-container">
      <!-- add essa class -->
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <a class="navbar-brand" href="index.html">
          <img id="logo" src="img/hdcagency_logo.svg" alt="hDC Agency"> hDC Agency
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
          aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
          <div class="navbar-nav">
            <a class="nav-item nav-link" id="home-menu" href="#">Home</span></a>
            <a class="nav-item nav-link" id="about-menu" href="#">A agência</a>
            <a class="nav-item nav-link" id="services-menu" href="#">Serviços</a>
            <a class="nav-item nav-link" id="team-menu" href="#">Time</a>
            <a class="nav-item nav-link" id="portfolio-menu" href="#">Projetos</a>
            <a class="nav-item nav-link" id="contact-menu" href="#">Contato</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <main>
    <div class="container-fluid">
      <!-- slider -->
      <div id="mainSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
          <li data-target="#mainSlider" data-slide-to="1"></li>
          <li data-target="#mainSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/banner1.png" class="d-block w-100" alt="Projetos de e-commerce">

            <!-- tirar classe d-none -->

            <div class="carousel-caption d-md-block">
              <h2>Quer criar um e-commerce?</h5>
                <p>Conte conosco, temos mais de 30 lojas no portfólio.</p>
                <a href="#" class="main-btn">Ver portfólio</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/banner2.png" class="d-block w-100" alt="Engenharia de software">
            <div class="carousel-caption d-md-block">
              <h2>Está querendo tirar o projeto do papel?</h5>
                <p>Nossa equipe de engenharia de software está pronta para lhe atender.</p>
                <a href="#" class="main-btn">Entre em contato</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/banner3.png" class="d-block w-100" alt="Manutenção em software">
            <div class="carousel-caption d-md-block">
              <h2>Está buscando manutenção no seu software?</h5>
                <p>A hDC conta com engenheiros altamente qualificados para resolver seu problema.</p>
                <a href="#" class="main-btn">Entre em contato</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Sobre a empresa -->
      <div id="about-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="main-title">Sobre a hDC Agency</h3>
            </div>
            <div class="col-md-6">
              <img class="img-fluid" src="img/agencia.jpg" alt="Agência hDC">
            </div>
            <div class="col-md-6">
              <h3 class="about-title">Uma agência que pensa no futuro</h3>
              <p>Nossos projetos são adaptados ao cliente e seu propósito.</p>
              <p>Após a especificação do projetos os arquitetos de software definirão as melhores tecnologias para seu
                projeto.</p>
              <p>E nossos designers trabalharão na sua interface/layout para impulsionar o negócio.</p>
              <p>Veja outros diferenciais:</p>
              <ul id="about-list">
                <li><i class="fas fa-check"></i> Utilização de Machine Learning / AI</li>
                <li><i class="fas fa-check"></i> Layout responsivo para todos os dispositivos</li>
                <li><i class="fas fa-check"></i> Integração com diversos sistemas do mercado</li>
                <li><i class="fas fa-check"></i> Sistema de pagamento próprio</li>
                <li><i class="fas fa-check"></i> Desenvolvimento com metodologia ágil</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Serviços da empresa -->
      <div id="services-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="main-title">Nossas especialidades</h3>
            </div>
            <div class="col-md-4 service-box">
              <i class="fas fa-mobile-alt"></i>
              <h4>Aplicativos Nativos</h4>
              <p>Utilizamos o real poder dos dispositivos móveis construindo aplicativos nativos.</p>
            </div>
            <div class="col-md-4 service-box">
              <i class="fas fa-shopping-cart"></i>
              <h4>E-commerces</h4>
              <p>Temos uma plataforma própria de e-commerce que se adapta a qualquer regra de negócio (B2C e B2B).</p>
            </div>
            <div class="col-md-4 service-box">
              <i class="fas fa-paint-brush"></i>
              <h4>Design Criativo</h4>
              <p>Nossos designers são especializados em UI/UX e também possuem vasta experiência no mercado de software.
              </p>
            </div>
            <div class="col-md-4 service-box">
              <i class="fab fa-google"></i>
              <h4>Experts em SEO</h4>
              <p>Com nosso serviço de marketing seu site será melhor posicionado no Google e venderá mais.</p>
            </div>
            <div class="col-md-4 service-box">
              <i class="fas fa-hands-helping"></i>
              <h4>Suporte 24/7</h4>
              <p>Você sempre terá alguem da equipe disponível para suporte, em diferentes plataformas. (chat, email,
                skype)</p>
            </div>
            <div class="col-md-4 service-box">
              <i class="fas fa-server"></i>
              <h4>Experiência em servidores</h4>
              <p>Garantimos uptime e também rápido tempo de resposta do seu site para o seu cliente.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Dados da empresa -->
      <div id="data-area">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleA"></div>
              <p>Projetos entregues</p>
            </div>
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleB"></div>
              <p>Clientes Felizes</p>
            </div>
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleC"></div>
              <p>Colaboradores</p>
            </div>
            <div class="col-md-3 col-xs-6 circle-box">
              <div id="circleD"></div>
              <p>Cafézinhos</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Time -->
      <div id="team-area">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h3 class="main-title">Nosso time</h3>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="img/profile1.jpg" class="card-img-top" alt="Imagem de Perfil 1">
                <div class="card-body">
                  <h5 class="card-title">Jhon Doe</h5>
                  <p class="card-text">Software Developer</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="img/profile2.jpg" class="card-img-top" alt="Imagem de Perfil 2">
                <div class="card-body">
                  <h5 class="card-title">Maria Mariana</h5>
                  <p class="card-text">SEO Consultant</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="img/profile3.jpg" class="card-img-top" alt="Imagem de Perfil 3">
                <div class="card-body">
                  <h5 class="card-title">Paul Baker</h5>
                  <p class="card-text">Project Manager</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <img src="img/profile4.jpg" class="card-img-top" alt="Imagem de Perfil 4">
                <div class="card-body">
                  <h5 class="card-title">Karina Katarina</h5>
                  <p class="card-text">UX/UI Designer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Trabalhe conosco -->
      <div id="apply-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6 apply-box" id="company-img"></div>
            <div class="col-md-6 apply-box" id="pattern-img">
              <h4>Gosta de desafios?</h4>
              <p>Temos várias posições abertas, entre elas: Software Engineer, UI/UX Designer, Project Manager e mais.
              </p>
              <p>Clique no botão abaixo e confira os benefícios e as posições em aberto.</p>
              <p>Aqui você terá a chance de trabalhar com as melhores tecnologias e os profissionais mais capacitados.
              </p>
              <a href="#" class="main-btn" id="apply-btn">Saiba Mais</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Portfólio -->
      <div id="portfolio-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3 class="main-title">Conheça nossos projetos</h3>
            </div>
            <div class="col-md-12" id="filter-btn-box">
              <button class="main-btn filter-btn active" id="all-btn">Todos</button>
              <button class="main-btn filter-btn" id="dev-btn">Desenvolvimento</button>
              <button class="main-btn filter-btn" id="dsg-btn">Design</button>
              <button class="main-btn filter-btn" id="seo-btn">SEO</button>
            </div>
            <div class="col-md-4 project-box dev">
              <img src="img/proj1.jpg" class="img-fluid" alt="Projeto 1">
            </div>
            <div class="col-md-4 project-box dsg">
              <img src="img/proj2.jpg" class="img-fluid" alt="Projeto 2">
            </div>
            <div class="col-md-4 project-box seo">
              <img src="img/proj3.jpg" class="img-fluid" alt="Projeto 3">
            </div>
            <div class="col-md-4 project-box dev">
              <img src="img/proj4.jpg" class="img-fluid" alt="Projeto 4">
            </div>
            <div class="col-md-4 project-box dsg">
              <img src="img/proj5.jpg" class="img-fluid" alt="Projeto 5">
            </div>
            <div class="col-md-4 project-box seo">
              <img src="img/proj6.jpg" class="img-fluid" alt="Projeto 6">
            </div>
          </div>
        </div>
      </div>
      <!-- Newsletter -->
      <div id="news-area">
        <div class="container">
          <div class="col-md-12">
            <h3 class="main-title">Fique por dentro das novidades</h3>
          </div>
          <p>Assine nossa lista de e-mails, e receba nossos conteúdos sobre desenvolvimento de software</p>
          <form action="">
            <input type="text" class="form-control" id="email-input" name="email" placeholder="Seu melhor e-mail">
            <input type="submit" id="news-btn" value="Inscrever">
          </form>
        </div>
      </div>
      <!-- Call to Action -->
      <div id="call-area">
        <div class="container">
          <div class="row">
            <p>Deseja fazer um orçamento sem compromisso?</p>
            <button class="main-btn" id="call-btn">Orçar</button>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Rodapé -->
  <footer>
    <div id="contact-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="main-title">Entre em contato conosco</h3>
          </div>
          <div class="col-md-4 contact-box">
            <i class="fas fa-phone"></i>
            <p><span class="contact-tile">Ligue para:</span> (48)99999-9999</p>
            <p><span class="contact-tile">Horários:</span> 8:00 - 19:00</p>
          </div>
          <div class="col-md-4 contact-box">
            <i class="fas fa-envelope"></i>
            <p><span class="contact-tile">Envie um email:</span> contato@hdcagency.com.br</p>
          </div>
          <div class="col-md-4 contact-box">
            <i class="fas fa-map-marker-alt"></i>
            <p><span class="contact-tile">Venha tomar um café:</span> Rua Lorem Ipsum - 1314</p>
          </div>
          <div class="col-md-6" id="msg-box">
            <p>Ou nos deixe uma mensagem:</p>
          </div>
          <div class="col-md-6" id="contact-form">
            <form action="">
              <input type="text" class="form-control" placeholder="E-mail" name="email">
              <input type="text" class="form-control" placeholder="Assunto" name="subject">
              <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
              <input type="submit" class="main-btn">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="copy-area">
      <div class="container">
        <div class="row">
          <?php
          date_default_timezone_set('America/Sao_Paulo');
          $ano = date('Y', time());
          ?>
          <div class="col-md-12">
            <p>Desenvolvido por Taylor Vargas  <?php echo $ano ?> ©</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts do projeto -->
  <script src="scripts.js"></script>
</body>

</html>
<style>

/* Gerais */
body {
  font-family: 'Roboto', sans-serif;
}

.row {
  margin: 0;
}

.container {
  padding: 70px 0;
}

p, li {
  color: #444;
  font-size: 14px;
}

/* Barra de navegação */
header, .navbar {
  background-color: #353D41;
}

#nav-container {
  padding-top: 0;
  padding-bottom: 0;
}

#logo {
  width: 75px;
}

.navbar-brand {
  padding: 0;
  color: #FFF;
}

.navbar-brand:hover {
  color: #FFF;
}

#navbar-links a {
  color: #FFF;
}

.navbar-expand-lg .navbar-nav .nav-link {
  padding: 1rem .8rem;
}

.nav-item.active {
  border-bottom: 3px solid #FFF;
}

/* Slider */

.container-fluid {
  padding: 0;
}

#mainSlider .carousel-inner, #mainSlider .carousel-item {
  height: 90vh;
}

#mainSlider .carousel-caption {
  top: 30%;
}

#mainSlider .carousel-caption h2 {
  font-size: 50px;
  margin-bottom: 30px;
}

#mainSlider .carousel-caption p {
  font-size: 22px;
  font-weight: 300;
  margin-bottom: 100px;
  color: #FFF;
}

.main-btn {
  background-color: #65DAF9;
  color: #FFF;
  text-transform: uppercase;
  width: 200px;
  height: 60px;
  padding: 10px 20px;
  border-radius: 30px;
  border: 3px solid transparent;
  transition: .5s;
}

.main-btn:hover {
  text-decoration: none;
  color: #FFF;
  background-color: transparent;
  border-color: #3EC1D5;
}

.carousel-indicators .active {
  background-color: #65DAF9;
}

/* Sobre a empresa */

#about-area {
  background-color: #F9F9F9;
}

.main-title {
  color: #444;
  margin: 0 0 65px 0;
  font-size: 40px;
  text-align: center;
}

.main-title::after {
  content: "";
  border-top: 2px solid #333;
  width: 15%;
  position: absolute;
  top: 60px;
  left: 42.5%;
}

.about-title {
  font-size: 17px;
  color: #444;
  text-transform: uppercase;
  font-weight: bold;
}

#about-list {
  list-style: none;
  padding-left: 0;
}

#about-list li {
  line-height: 30px;
}

#about-list i {
  color: #65DAF9;
  margin-right: 15px;
}

/* Serviços */

.service-box {
  text-align: center;
  margin-bottom: 50px;
}

.service-box i, .service-box h4 {
  transition: .5s;
}

.service-box i {
  font-size: 36px;
  margin-bottom: 20px;
  color: #444;
}

.service-box h4 {
  font-size: 24px;
  margin-bottom: 20px;
}

.service-box:hover > i, .service-box:hover > h4 {
  color: #65DAF9;
}

/* Dados */

.circle-box div {
  padding: 0 40px;
}

.progressbar-text {
  font-weight: bold;
  font-size: 32px;
}

#data-area p {
  color: #FFF;
  text-align: center;
  font-size: 26px;
  margin-top: 20px;
}

/* Time */

.card-body {
  text-align: center;
}

/* Trabalhe conosco */

#apply-area {
  height: 500px;
}

#apply-area .container-fluid, #apply-area .row {
  height: 100%;
}

#apply-area .apply-box {
  padding: 70px 50px;
  text-align: center;
}

#company-img {
  background-image: url('../img/empresa.jpg');
  background-size: cover;
  height: 100%;
}

#pattern-img h4, #pattern-img p {
  color: #FFF;
}

#pattern-img h4 {
  margin-top: 8%;
  margin-bottom: 20px;
  text-transform: uppercase;
}

#pattern-img p {
  margin-bottom: 20px;
}

#apply-btn {
  display: block;
  height: auto;
  width: 180px;
  margin-left: auto;
  margin-right: auto;
  margin-top: 30px;
  background-color: transparent;
  border-color: #FFF;
}

#apply-btn:hover {
  border-color: #65DAF9;
  background-color: #65DAF9;
}

/* Portfólio */

.project-box {
  margin-bottom: 30px;
}

#filter-btn-box {
  margin-bottom: 50px;
  text-align: center;
}

#portfolio-area .filter-btn {
  color: #444;
  border: 1px solid #444;
  background-color: transparent;
  text-transform: none;
  margin: 0 15px;
  min-width: 100px;
  width: auto;
  height: 40px;
  line-height: 40px;
  padding: 0 20px;
}

#portfolio-area .filter-btn.active, #portfolio-area .filter-btn:hover {
  color: #FFF;
  border: 1px solid #65DAF9;
  background-color: #65DAF9;
}

/* News Letter */

#news-area {
  text-align: center;
  background-color: #F9F9F9;
}

#news-area p {
  font-size: 18px;
  margin-bottom: 40px;
}

#email-input {
  border-radius: 0;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  border: 1px solid #65DAF9;
  display: inline;
  box-sizing: border-box;
  width: 40%;
  height: 40px;
}

#news-btn {
  border-top-right-radius: 20px;
  border-bottom-right-radius: 20px;
  border: 1px solid #65DAF9;
  background-color: #65DAF9;
  color: #FFF;
  text-transform: uppercase;
  height: 40px;
  padding: 0 30px;
  margin-left: -130px;
  position: absolute;
  transition: .5s;
}

#news-btn:hover {
  background-color: #FFF;
  color: #65DAF9;
}

/* Call To Action */

#call-area {
  background-color: #65DAF9;
  text-transform: uppercase;
}

#call-area .container {
  padding: 40px 100px;
}

#call-area .row {
  display: block;
  text-align: center;
}

#call-area p {
  color: #FFF;
  font-weight: bold;
  font-size: 20px;
  margin-bottom: 0;
  height: 60px;
  line-height: 60px;
  letter-spacing: 2px;
  display: inline;
}

#call-area #call-btn {
  background-color: #FFF;
  color: #65DAF9;
  font-weight: bold;
  margin-left: 30px;
  font-size: 20px;
  width: auto;
  letter-spacing: 2px;
}

/* Footer */

#contact-area {
  text-align: center;
}

.contact-box {
  padding-bottom: 50px;
  margin-bottom: 50px;
  border-bottom: 1px solid #3EC1D5;
}

.contact-box i {
  color: #444;
  border: solid 1px #444;
  border-radius: 50%;
  width: 55px;
  height: 55px;
  line-height: 55px;
  font-size: 24px;
  margin-bottom: 20px;
}

.contact-box p {
  font-size: 16px;
}

.contact-tile {
  font-weight: bold;
  color: #3EC1D5;
}

#msg-box p {
  font-size: 22px;
}

#contact-form input[type="text"], #contact-form textarea {
  margin-bottom: 15px;
  border-radius: 0;
}

#contact-form .main-btn {
  width: 120px;
  height: 50px;
}

#contact-form .main-btn:hover {
  color: #3EC1D5;
}

/* Copy */

#copy-area {
  background-color: #F1F1F1;
}

#copy-area .container {
  padding: 10px 0;
  text-align: center;
}

#copy-area .container p {
  margin-bottom: 0;
}

#copy-area .container a {
  font-weight: bold;
  color: #444;
}

#copy-area .container a:hover {
  text-decoration: none;
  color: #3EC1D5;
}

/* responsive */
@media(max-width: 768px) {
  
  /* geral */
  .container {
    padding: 20px 0;
  }
  
  /* slider */
  #mainSlider .carousel-inner, #mainSlider .carousel-item {
    height: auto;
  }

  #mainSlider .carousel-caption h2 {
    font-size: 28px;
  }

  #mainSlider .carousel-caption p {
    font-size: 18px;
    margin-bottom: 40px;
  }

  .carousel-caption {
    left: 10%;
    right: 10%;
  }
  
  /* about */
  #about-area img {
    margin-top: 100px;
  }
  
  /* data */
  .circle-box div {
    padding: 0 10px;
  }

  #data-area p {
    font-size: 16px;
  }
  
  /* team */
  .card-title {
    font-size: 14px;
  }

  .card-text {
    font-size: 12px;
  }

  /* apply */
  #apply-area .apply-box {
    padding: 50px 25px;
  }

  /* news */
  #news-area p {
    width: 80%;
    margin-left: auto;
    margin-right: auto;
  }

  #email-input {
    width: 70%;
  }

  #call-area {
    margin-top: 30px;
  }

  #call-area .container {
    padding: 30px;
  }

  #call-area p, #call-area #call-btn {
    font-size: 16px;
  }

}


@media(max-width: 425px) {

  /* slider */
  #mainSlider {
    margin-top: 90px;
  }

  #mainSlider .carousel-caption {
    top: 5%;
  }

  #mainSlider .carousel-caption h2 {
    font-size: 18px;
    margin-bottom: 40px;
  }

  #mainSlider .carousel-caption p {
    display: none;
  }

  .carousel-caption .main-btn {
    
    font-size: 14px;
  }

  /* about */
  .main-title {
    font-size: 30px;
  }

  #about-area img {
    margin-top: 0;
    margin-bottom: 30px;
  }

  /* data */
  .circle-box {
    width: 50%;
  }

  #team-area .col-md-3 {
    width: 50%;
    margin-bottom: 30px;
  }

  /* apply */
  #apply-area {
    height: auto;
  }

  #company-img {
    display: none;
  }

  /* filter */
  #portfolio-area .filter-btn {
    margin-bottom: 20px;
  }

  .project-box {
    width: 50%;
  }

  /* news */
  #news-area .main-title {
    font-size: 24px;
  }

  #news-area p {
    font-size: 16px;
  }

  #email-input {
    width: 80%;
  }

  #call-area p, #call-area #call-btn {
    font-size: 14px;
    letter-spacing: 0;
  }

  #call-area p, #call-area #call-btn {
    margin: 0;
    width: 50%;
  }

  /* contact */
  .contact-box {
    border: none;
    margin-bottom: 0;
  }
}

</style>