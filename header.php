<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> - <?php wp_title(''); ?> </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <header>

    <!-- container para ajustar a logo-->
    <div class="container">
      <div class="logo-header col-4">
        <img class="logo-header_dr" src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/logo/logo-drmarina.png" alt="Logo Doutora Marina Gabriela" width="241" height="241" class="d-inline-block align-text-top" aria-hidden="true">
      </div>
    </div>
    <!------fim logo------->

    <!--Menu redes sociais-->
    <div class="redes-nav-header">
      <div class="container ">

        <div class="nav-redes__navegacao">
          <div class="row justify-content-end">
            <ul class="redes-sociais">

              <li class="redes-sociais_item">
                <a class="redes-sociais__link" href="tel:+552122364214">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/redes-sociais/phone-call.svg" alt="Link para ligação">(21) 2236-4214</a>
              </li>

              <li class="redes-sociais_item">
                <a class="redes-sociais__link" href="https://api.whatsapp.com/send?phone=5521997922877&text=Ol%C3%A1%2C%20em%20que%20posso%20ajudar%3F" target="_blank">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/redes-sociais/whatsapp.svg" alt="Link para whatsapp">
                  (21) 99792-2877
                </a>
              </li>

              <li class="redes-sociais_item">
                <a class="redes-sociais__link" href="https://www.instagram.com/marinagabriela_otorrino/" target="_blank">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/redes-sociais/instagram.svg" alt="Link para Instragram">
                </a>
              </li>

              <li class="redes-sociais_item">
                <a class="redes-sociais__link header_doctoralia-nav" href="#" target="_blank">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/logo/logo-default-br.svg" alt="Logo Doctoralia" aria-hidden="true"></a>
              </li>



              <li class="redes-sociais_item">
                <a class="redes-sociais__link marcar-consulta" href="#">Marcar consulta</a>
              </li>

            </ul>

          </div>
        </div>
      </div>
    </div>
    <!--Menu redes sociais-->


    <!---Menu desktop e Mobile -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <button class="navbar-toggler" id="nav-bar__botao-header" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="container">
          <div class="row justify-content-end">

            <ul class="navbar-nav">

              <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#sobre-drmarina">Sobre</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#blog-drmarina">Blog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#contato-drmarina">Contato</a>
              </li>


              <li class="redes-sociais_item" id="redes-mobile__consulta3">
                <a class="redes-sociais__link" href="tel:+552122364214">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/redes-sociais/phone-call.svg" alt="Link para ligação">(21) 2236-4214</a>
              </li>

              <li class="redes-sociais_item" id="redes-mobile__consulta2">
                <a class="redes-sociais__link" href="https://api.whatsapp.com/send?phone=5521997922877&text=Ol%C3%A1%2C%20em%20que%20posso%20ajudar%3F" target="_blank">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/redes-sociais/whatsapp.svg" alt="Link para whatsapp">
                  (21) 99792-2877
                </a>
              </li>

              <li class="redes-sociais_item" id="redes-mobile__consulta">
                <a class="redes-sociais__link" href="https://www.instagram.com/marinagabriela_otorrino/" target="_blank">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/redes-sociais/instagram.svg" alt="Link para Instragram">
                </a>
                <a class="redes-sociais__link marcar-consulta" href="#">Marcar consulta</a>

              </li>



            </ul>

          </div>
        </div>
      </div>

    </nav>
    <!--fim menu-->

  </header>

  <main role="main">
    <section class="banner">

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">

          <div class="carousel-item active">
            <div class="d-block w-100 banner-bg__01">
              <div class="container h-100">
                <div class="banner-imagem__pri h-100">
                  <h1 class="banner-titulo banner-titulo__after">
                    Dra. Marina <br>
                  </h1>
                  <h1 class="banner-titulo banner-titulo__before">
                    Gabriela
                  </h1>
                  <p class="banner-paragrafo">Otorrinolaringologista <br>
                    Otoneurologia <br>
                    <span class="banner-span">CRM 910082 | RQE 25927</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="d-block w-100 banner-bg__02">
              <div class="container h-100">
                <div class="banner-imagem__pri h-100">
                  <h1 class="banner-titulo banner-titulo__after">
                    Dra. Marina <br>
                  </h1>
                  <h1 class="banner-titulo banner-titulo__before">
                    Gabriela
                  </h1>
                  <p class="banner-paragrafo">Otorrinolaringologista <br>
                    Otoneurologia <br>
                    <span class="banner-span">CRM 910082 | RQE 25927</span>
                  </p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>
    </section>