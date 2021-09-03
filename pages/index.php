<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clube Brasil Benefícios</title>

    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <link href="assets/lib/prismjs/prism.css" rel="stylesheet">
    <link href="assets/lib/loaders.css/loaders.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link href="assets/lib/remodal/remodal.css" rel="stylesheet">
    <link href="assets/lib/remodal/remodal-default-theme.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/lib/lightbox2/css/lightbox.css" rel="stylesheet">
    <link href="assets/lib/semantic-ui-accordion/accordion.min.css" rel="stylesheet">
    <link href="assets/lib/semantic-ui-transition/transition.min.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet">
    <style>
      p.lead {
        text-align: justify;
      }
    </style>
  </head>


  <body>

    <main>


      <div id="preloader">
        <div class="loader"><span></span><span></span><span></span><span></span></div>
      </div>

      <section class="p-0" id="home">

        <div class="container-fluid p-0 minh-100vh">
          <div class="position-relative px-3 w-lg-50 position-lg-absolute" id="baseContent">
            <div class="row align-items-center minh-50vh justify-content-center py-5 minh-lg-100vh">
              <div class="col-sm-9 col-lg-10 text-center">
                <img class="w-75 w-sm-50" src="assets/img/logo.png" alt="">
                <h1 class="font-weight-medium mt-4 fs-3 fs-sm-4">Mais benefícios para seus associados<span class="text-success">.</span></h1>
                <p class="lead mt-3 text-900 fs-0">Aumente suas vendas e fidelize seus associados
                  <br class="d-none d-sm-block d-lg-none d-xl-block">concedendo benefícios relevantes.</p>
                <a class="btn btn-primary btn-lg rounded-capsule mt-4" href="#contact"> Faça uma cotação</a>
                <p class="text-500 mt-2">ir para o site</p>
              </div>
            </div>
          </div>
          <?php
            $bbl = file_get_contents("content-brasil-beneficios.json");
            $items = json_decode($bbl, false); 
            
          ?>
          <div class="position-relative w-lg-50 position-lg-fixed undefined" id="gridNav">
            <div class="row h-lg-100vh">
              <?php foreach ($items as $i) : ?>
              <div class="col-6 col-sm-3 minh-25vh h-md-25vh sidebar-item-wrapper py-5" style="background-color: <?= $i->bgcolor ?>" data-content="<?= slugify($i->title) ?>">
                <div class="sidebar-item">
                  <!-- <i class="text-white <?= $i->icon ?> mb-3 nav-fa-icon" data-fa-transform="grow-6"></i> -->
                  <?php 
                  if(!empty($i->icon)) : ?>

                  <img style="width: 32px; height: auto" src="assets/img/icons/beneficios/<?= $i->icon ?>" />
                  <?php endif; ?>
                  <h2 class="font-weight-medium text-white fs-0 fs-xl-1"><?= $i->title ?></h2>
                </div>
              </div>
              <?php endforeach; ?>
              
              <div class="col-6 col-sm-3 minh-25vh h-md-25vh sidebar-item-wrapper py-5" style="display: none; background-color: #16a085" data-content="contact">
                <div class="sidebar-item">
                  <i class="text-white fas fa-comments mb-3 nav-fa-icon" data-fa-transform="grow-6"></i>
                  <h2 class="font-weight-medium text-white fs-0 fs-xl-1">Contato</h2>
                </div>
              </div>
              <!-- <div class="col-6 col-sm-3 minh-25vh h-md-25vh sidebar-item-wrapper py-5" style="background-color: #27ae60" data-content="a6">
                <div class="sidebar-item">
                  <i class="text-white fas fa-dog mb-3 nav-fa-icon" data-fa-transform="grow-6"></i>
                  <h2 class="font-weight-medium text-white fs-0 fs-xl-1">Pet</h2>
                </div>
              </div>
              <div class="col-6 col-sm-3 minh-25vh h-md-25vh sidebar-item-wrapper py-5" style="background-color: #2980b9" data-content="a7">
                <div class="sidebar-item">
                  <i class="text-white fas fa-home mb-3 nav-fa-icon" data-fa-transform="grow-6"></i>
                  <h2 class="font-weight-medium text-white fs-0 fs-xl-1">Residencial</h2>
                </div>
              </div>
              <div class="col-6 col-sm-3 minh-25vh h-md-25vh sidebar-item-wrapper py-5" style="background-color: #8e44ad" data-content="a8">
                <div class="sidebar-item">
                  <i class="text-white fas fa-percent mb-3 nav-fa-icon" data-fa-transform="grow-6"></i>
                  <h2 class="font-weight-medium text-white fs-0 fs-xl-1">Clube de Desconto</h2>
                </div>
              </div>
              <div class="col-6 col-sm-3 minh-25vh h-md-25vh sidebar-item-wrapper py-5" style="background-color: #f1c40f" data-content="a9">
                <div class="sidebar-item">
                  <i class="text-white fas fa-cross mb-3 nav-fa-icon" data-fa-transform="grow-6"></i>
                  <h2 class="font-weight-medium text-white fs-0 fs-xl-1">Funeral</h2>
                </div>
              </div>
              <div class="col-6 col-sm-3 minh-25vh h-md-25vh sidebar-item-wrapper py-5" style="background-color: #e67e22" data-content="a10">
                <div class="sidebar-item">
                  <i class="text-white fas fa-tv mb-3 nav-fa-icon" data-fa-transform="grow-6"></i>
                  <h2 class="font-weight-medium text-white fs-0 fs-xl-1">Telemedicina</h2>
                </div>
              </div>
              <div class="col-6 col-sm-3 minh-25vh h-md-25vh sidebar-item-wrapper py-5" style="background-color: #e74c3c" data-content="a11">
                <div class="sidebar-item">
                  <i class="text-white fas fa-keyboard mb-3 nav-fa-icon" data-fa-transform="grow-6"></i>
                  <h2 class="font-weight-medium text-white fs-0 fs-xl-1">Checkup Médico</h2>
                </div>
              </div>
              <div class="col-6 col-sm-3 minh-25vh h-md-25vh sidebar-item-wrapper py-5" style="background-color: #34495e" data-content="a12">
                <div class="sidebar-item">
                  <i class="text-white fas fa-object-ungroup mb-3 nav-fa-icon" data-fa-transform="grow-6"></i>
                  <h2 class="font-weight-medium text-white fs-0 fs-xl-1">Orientação Médica</h2>
                </div>
              </div>
              <div class="col-6 col-sm-3 minh-25vh h-md-25vh sidebar-item-wrapper py-5" style="background-color: #f39c12" data-content="a13">
                <div class="sidebar-item">
                  <i class="text-white fas fa-list-alt mb-3 nav-fa-icon" data-fa-transform="grow-6"></i>
                  <h2 class="font-weight-medium text-white fs-0 fs-xl-1">Auxílio Medicamento</h2>
                </div>
              </div>
              <div class="col-6 col-sm-3 minh-25vh h-md-25vh sidebar-item-wrapper py-5" style="background-color: #d35400" data-content="a14">
                <div class="sidebar-item">
                  <i class="text-white fas fa-square mb-3 nav-fa-icon" data-fa-transform="grow-6"></i>
                  <h2 class="font-weight-medium text-white fs-0 fs-xl-1">Médico em Casa</h2>
                </div>
              </div>
              <div class="col-6 col-sm-3 minh-25vh h-md-25vh sidebar-item-wrapper py-5" style="background-color: #c0392b" data-content="a15">
                <div class="sidebar-item">
                  <i class="text-white fas fa-clipboard mb-3 nav-fa-icon" data-fa-transform="grow-6"></i>
                  <h2 class="font-weight-medium text-white fs-0 fs-xl-1">Consultas e exames</h2>
                </div>
              </div>
              <div class="col-6 col-sm-3 minh-25vh h-md-25vh sidebar-item-wrapper py-5" style="background-color: #2c3e50" data-content="a16">
                <div class="sidebar-item">
                  <i class="text-white fas fa-pills mb-3 nav-fa-icon" data-fa-transform="grow-6"></i>
                  <h2 class="font-weight-medium text-white fs-0 fs-xl-1">Desconto Farmácia</h2>
                </div>
              </div> -->
            </div>
          </div>
        </div>

      </section>
	  
      
      <div class="page position-absolute t-0 w-100" id="contact">
        <div class="row no-gutters minh-100vh">
          <div class="col-lg-9 order-1 order-lg-0 page-content pt-6 pt-lg-0">


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pt-5 pt-xl-7 pt-xxl-8">

              <div class="container-fluid">
                <div class="row justify-content-center">
                  <div class="col-lg-10">
                    <div class="text-center mb-5 mb-lg-6">
                      <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">Entre em contato </span></h2>
                      <hr class="hr-ornate" />
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-4 mb-xl-0">
                        <h4>Fale conosco</h4>
                        <p class="mt-3 mb-0">Como podemos te ajudar a levar mais benefícios para seus associados? Estamos aqui para te ajudar nessa jornada e temos certeza que traremos a você a melhor solução nas linhas de Carro, Casa e Vida.</p>
                        <div class="row">
                          <div class="col-11">
                            <hr class="my-4" />
                          </div>
                          <div class="col-auto" style="width: auto">
                            <div class="row">
                              <div class="col-1"><span class="fas fa-map-marker-alt text-900"></span></div>
                              <div class="col">
                                <h5 class="mb-1">Avenida Sebastião de Brito, 805</h5>
                                <p>Dona Clara - Belo Horizonte/MG</p>
                              </div>
                            </div>
                          </div>
                          
                          <!-- <div class="col-auto" style="min-width: 100%;">
                            <ul class="list-inline">
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"><span class="fab fa-facebook-f"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"> <span class="fab fa-twitter"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"> <span class="fab fa-linkedin-in"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"> <span class="fab fa-youtube"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"><span class="fab fa-google-plus-g"></span></a>
                              </li>
                            </ul>
                          </div> -->
                        </div>
                        <div class="row">
                          
                          
                          <div class="col-auto" style="width: auto">
                            <div class="row">
                              <div class="col-12">
                                <div class="row">
                                  <div class="col-1 mr-3"><span class="fas fa-phone text-900"></span></div>
                                  <div class="col pl-0">
                                    <!-- <a href="tel:112-334-48-55">(31) 2510-8536 / (31) 99279-0202</a> -->
                                    (31) 2510-8536 / (31) 99279-0202
                                  </div>
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="row">
                                  <div class="col-1 mr-3"><span class="fas fa-paper-plane text-900"></span></div>
                                  <div class="col pl-0">
                                    <a href="mailto:contato@brasilatuarial.com.br">contato@brasilatuarial.com.br</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-11">
                            <hr class="my-4" />
                          </div>
                          <!-- <div class="col-auto" style="min-width: 100%;">
                            <ul class="list-inline">
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"><span class="fab fa-facebook-f"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"> <span class="fab fa-twitter"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"> <span class="fab fa-linkedin-in"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"> <span class="fab fa-youtube"></span></a>
                              </li>
                              <li class="list-inline-item mx-2">
                                <a class="text-700" href="#"><span class="fab fa-google-plus-g"></span></a>
                              </li>
                            </ul>
                          </div> -->
                        </div>
                      </div>
                      <div class="col-md-6 mb-4 mb-lg-0">
                        <h4>Deixe-nos seus dados</h4>
                        <p>Retornaremos ao contato apresentando nossas soluções de benefícios.</p>
                        <form class="zform">
                          <input type="hidden" name="to" value="marcelo@agenciabrasildigital.com.br" />
                          <div class="form-group">
                            <label class="ls text-uppercase mb-0">Seu nome</label>
                            <input class="form-control" type="text" name="name" placeholder="" required="required" />
                          </div>
                          <div class="form-group">
                            <label class="ls text-uppercase mb-0">Seu email</label>
                            <input class="form-control" type="email" name="email" placeholder="" required="required" />
                          </div>
                          <div class="form-group">
                            <label class="ls text-uppercase mb-0">Sua mensagem</label>
                            <textarea class="form-control" rows="4" name="message" placeholder="" required="required"></textarea>
                          </div>
                          <div class="zform-feedback"></div>
                          <button class="btn btn-block btn-warning mt-4" type="submit">Enviar</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center mt-4">
                  <div class="col-lg-10">
                    <div class="rounded googlemap minh-50vh" data-latlng="-19.86165927393409, -43.939555792919684,17" data-scrollwheel="false" data-icon="assets/img/map-marker.png" data-zoom="17" data-theme="Default">
                      <div class="marker-content py-3">
                        <h5>Eiffel Tower</h5>
                        <p>Gustave Eiffel's iconic, wrought-iron 1889 tower,
                          <br/> with steps and elevators to observation decks. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->


            <footer class="page-footer">
              <div class="bg-holder" style="background-image:url(assets/img/sidebars/contact.jpg);background-position: 0 37%; transform: scale(1.1);">
              </div>
              <!--/.bg-holder-->

              <div class="row justify-content-center">
                <div class="col-lg-10">
                  <div class="row align-items-center">
                    <div class="col-lg-6 text-lg-left">
                      <p class="fs--1 text-uppercase ls font-weight-bold mb-0">
                        Copyright &copy; 2018 Boots4&trade; inc.</p>
                    </div>
                    <div class="col-lg-6 text-lg-right mt-2 mt-lg-0">
                      <p class="fs--1 text-uppercase ls font-weight-bold mb-0">Made with<span class="fas fa-heart mx-1"></span>by
                        <a class="text-light" href="https://themewagon.com/">Themewagon</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </footer>
          </div>
          <div class="col-lg-3 col-12 t-0 order-0 order-lg-1 position-absolute position-lg-relative">
            <div class="h-lg-100vh sticky-top py-4 sticky-area"><span class="btn-close"><img class="d-none d-lg-block times" src="assets/img/times.svg" width="25" alt=""/><img class="d-lg-none" src="assets/img/times-black.svg" width="18" alt=""/></span>
              <div class="bg-holder" style="background-image:url(assets/img/sidebars/contact.jpg);">
              </div>
              <!--/.bg-holder-->

              <h1 class="page-title">Fale conosco</h1>
            </div>
          </div>
        </div>
      </div>


      <?php foreach ($items as $i) : ?>
        <div class="page position-absolute t-0 w-100" id="<?= slugify($i->title) ?>">
          <div class="row no-gutters minh-100vh">
            <div class="col-lg-6 order-1 order-lg-0 page-content pt-6 pt-lg-0">


              <!-- ============================================-->
              <!-- <section> begin ============================-->
              <section class="pt-5 pt-xl-7 pt-xxl-8">

                <div class="container-fluid">
                  <div class="row justify-content-center pb-5">
                    <div class="col-lg-10">
                      <div class="text-center mb-5 mb-lg-6">
                        <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium"><?= $i->title ?> </span></h2>
                        <hr class="hr-ornate" />
                      </div>

                      <div>
                        
                        <p class="lead"><?= $i->content ?></p>
                        
                      </div>

                      <?php if(isset($i->vantagens) && !empty($i->vantagens)) : ?>
                        <div>
                          <h4>Vantagens</h4>
                          
                          <ul>
                            <?php foreach ($i->vantagens as $vantagem) : ?>
                             <li> <?= $vantagem ?> </li>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <!-- end of .container-->

              </section>
              <!-- <section> close ============================-->
              <!-- ============================================-->

              <?php 
                $bg = (isset($i->bgimage) && !empty($i->bgimage)) ? 'assets/img/beneficios/'.$i->bgimage : 'assets/img/sidebars/gallery.jpg';
              ?>
              <footer class="page-footer">
                <?php /*<div class="bg-holder" style="background-image:url(<?=$bg?>);background-position: 0 8%; transform: scale(1.1);">
                </div> */ ?>
                <!--/.bg-holder-->

                <div class="row justify-content-center">
                  <div class="col-lg-10">
                    <div class="row align-items-center">
                      <div class="col-lg-6 text-lg-left">
                        <p class="fs--1 text-uppercase ls font-weight-bold mb-0">
                          Copyright &copy; 2018 Boots4&trade; inc.</p>
                      </div>
                      <div class="col-lg-6 text-lg-right mt-2 mt-lg-0">
                        <p class="fs--1 text-uppercase ls font-weight-bold mb-0">Made with<span class="fas fa-heart mx-1"></span>by
                          <a class="text-light" href="https://themewagon.com/">Themewagon</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
            </div>
            <div class="col-lg-6 col-12 t-0 order-0 order-lg-1 position-absolute position-lg-relative">
              <div class="h-lg-100vh sticky-top py-4 sticky-area"><span class="btn-close"><img class="d-none d-lg-block times" src="assets/img/times.svg" width="25" alt=""/><img class="d-lg-none" src="assets/img/times-black.svg" width="18" alt=""/></span>
                <div class="bg-holder" style="background-image:url(<?=$bg?>);">
                </div>
                <!--/.bg-holder-->

                <h1 class="page-title"><?= $i->title ?></h1>
              </div>
            </div>
          </div>
        </div>
      <?php unset($bg);
     endforeach; ?>
          
	  <?php 


	  // $cont=1;
	  // while($cont<=16):
	  // include('partials/a'.$cont.'.php');
	  // $cont++;
	  // endwhile;
	  
	  ?>
   
    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/lib/prismjs/prism.js"></script>
    <script src="assets/lib/loaders.css/loaders.css.js"></script>
    <script src="assets/js/stickyfill.min.js"></script>
    <script src="assets/lib/remodal/remodal.js"></script>
    <script src="assets/lib/jtap/jquery.tap.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL"></script>
    <script src="assets/lib/owl.carousel/owl.carousel.js"></script>
    <script src="assets/lib/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/lib/isotope-packery/packery-mode.pkgd.min.js"></script>
    <script src="assets/lib/lightbox2/js/lightbox.js"></script>
    <script src="assets/lib/semantic-ui-accordion/accordion.min.js"></script>
    <script src="assets/lib/semantic-ui-transition/transition.min.js"></script>
    <script src="assets/lib/prismjs/prism.js"></script>
    <script src="assets/js/stickyfill.min.js"></script>
    <script src="assets/lib/sticky-kit/sticky-kit.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=initMap" async></script>

  </body>

</html>






<?php 
function slugify($text)
{
    // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, '-');

    // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}?>