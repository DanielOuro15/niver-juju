<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Parabens Juju!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Início</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Sobre</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Parabéns Juju</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Fotinhas</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Júlia Faulhaber</h1>
      <p><span class="typed" data-typed-items="Linda, Fofa, Meiga, Inteligente"></span></p>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sobre</h2>
          <p>Menina mais simpática que já conheci. Além de ser linda? Carinhosa, engraçada, inteligente, fofa, cristã, cheirosa, tem o melhor abraço de todos, toca piano, canta, faz trabalho missionário, linda, tem planos pro futuro, ja citei q ela é linda?</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="{{ asset('img/profile-img.jpeg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Estudante de arquitetura</h3>
            <p class="fst-italic">
              Só vejo os storys dela com o notebook e uns papeis cheios de cálculos kkkkk
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Aniversário:</strong> <span>6 de Maio</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Cidade:</strong> <span>Brasília, Brasil</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Idade:</strong> <span>19</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Estado Civil:</strong> <span>Mãe ta on</span></li>
                </ul>
              </div>
            </div>
            <p>
              Anda meio sumida mas sei que são motivos totalmente entendiveis
              (não sei se existe essa palavra), quase coloco uma plaquinha de 
              desaparecida kkkkkkk(brincadeira). To com muuita saudade e to só 
              esperando ela entrar de férias pra levar ela pros rolê que to devendo kkkkk.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Fatos</h2>
          <p>Alguns fatos que já até citei acima mas que me chamam atenção</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-heart-eyes-fill"></i>
              <h4>Melhor Abraço</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-music-note-beamed"></i>
              <h4>Toca Piano</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-suit-heart-fill"></i>
              <h4>Carinhosa</h4>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-lightbulb"></i>
              <h4>Inteligente</h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Habilidades</h2>
          <p>Habilidades que ao meu ver ela tira de letra</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Me fazer sorrir <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Tocar piano <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Sumir <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">Me fazer bem mesmo estando longe <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Me fazer sentir saudade <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Fazer cálculos <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Parabéns Juju!!</h2>
          <h5>Entendeu porquê não te mandei textão ne? kkkkkk, enfim. Jú, te desejo o melhor desse mundo
            porque você merece! Que o Senhor Jesus Cristo esteja sempre contigo, te guardando e te protegendo, 
            que em tudo o que você tocar possa prosperar. Não sou tão proximo como queria, mas saiba que você
            é muuuito importante na minha vida e o que eu sinto por ti é mais que especial. Obrigado por todas as
            risadas, todas as conversas e tudo mais, mesmo você distante saiba que estou sempre aqui pra o que 
            você precisar, você não tem noção do quanto gosto de ti kkkkkkk. Em breve prometo te levar pros rolês 
            que to te devendo kkkkkk. To com muuita saudade do seu abraço... na vdd de você toda! kkkkk. Enfim, 
            tenho muita coisa pra te dizer e no tempo certo te direi. Aproveite seu dia! Você é incrível! &#128151
          </h5>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Fotinhas</h2>
          <p>Umas fotinhas nossa, não temos muitas kkkkkk, mas espero em breve ter mais.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todas</li>
              <li data-filter=".filter-app">Eu e Tu</li>
              <li data-filter=".filter-card">Tu e Eu</li>
              <li data-filter=".filter-web">Nós</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <video width="420" height="240" controls class="img-fluid" alt="">
              <source src="{{ asset('videos/foto1.mp4') }}" type="video/mp4">
            </video>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{ asset('img/eu-e-ela3.jpeg') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app"> 
              <img src="{{ asset('img/eu-e-ela2.jpeg') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <video width="420" height="240" controls class="img-fluid" alt="">
              <source src="{{ asset('videos/foto4.mp4') }}" type="video/mp4">
            </video>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <video width="420" height="240" controls class="img-fluid" alt="">
              <source src="{{ asset('videos/foto5.mp4') }}" type="video/mp4">
            </video>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <video width="420" height="240" controls class="img-fluid" alt="">
              <source src="{{ asset('videos/foto2.mp4') }}" type="video/mp4">
            </video>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <img src="{{ asset('img/eu-e-ela1.jpeg') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <video width="420" height="240" controls class="img-fluid" alt="">
              <source src="{{ asset('videos/foto3.mp4') }}" type="video/mp4">
            </video>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <video width="420" height="240" controls class="img-fluid" alt="">
              <source src="{{ asset('videos/juju_boliche.mp4') }}" type="video/mp4">
            </video>
            <p>Lembrando q vc é minha patinha hehehe.</p>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Júlia Faulhaber</h3>
      <p>Site criado para parabenizar a mais bela moça que conheço.</p>
      <div class="social-links">
        <a href="https://api.whatsapp.com/send?phone=5561981427502" class="twitter"><i class="bx bxl-whatsapp"></i></a>
        <a href="https://www.instagram.com/danielouro15/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/daniel-ouro-15176a1b8/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Daniel Ouro</span></strong>. Todos os Direitos Reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://www.navarroeouro.com">Daniel Ouro</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/typed.js/typed.min.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>