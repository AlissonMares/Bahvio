<?php include 'includes/logo-page.php'; ?>

<?php
include ('funcoes_avaliacoes.php');
include('conexao/connect.php');



?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BAHVIO</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- i will provide this in description  -->
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/select2.min.css" />
    <link rel="stylesheet" href="assets/css/select2-bootstrap4.min.css" />

    <link rel="stylesheet" href="assets/css/slick-animation.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <?php include_once('includes/header.php'); ?>
  <!-- slider starts  -->
  <!-- slider starts  -->
  <section id="home" class="iq-main-slider p-0">
    <div id="home-slider" class="slider m-0 p-0">
      <div class="slide slick-bg s-bg-1">
        <div class="container-fluid position-relative h-100">
          <div class="slider-inner h-100">
            <div class="row align-items-center h--100">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <a href="javascript:void(0)">
                  <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                    <img src="assets/images/bahviologo.png" class="c-logo" alt="" />
                  </div>
                </a>
                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                  data-delay-in="0.6">
                  Homem-Aranha
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                        <?php
                        $filme_id = 14; 
                        $media_avaliacao = calcularMediaAvaliacao($conn, $filme_id);
                        echo gerarEstrelas($media_avaliacao);
                        ?>
                    </ul>
                    <span class="text-white ml-2"><?php echo number_format($media_avaliacao, 1); ?></span>
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2">12+</span>
                    <span class="ml-3">2h 21min</span>
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                Peter Parker, com sua identidade revelada, pede ajuda ao Doutor Estranho. Porém, um feitiço mal executado traz inimigos de todo o multiverso, desafiando o Homem-Aranha e os Vingadores.
                </p>
                <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <div class="text-primary title genres">Gênero:
                    <span class="text-body">Ação</span>
                  </div>
                  <div class="text-primary title tag">
                    Etiquetas:
                    <span class="text-body">Ação, Aventura, Fantasia</span>
                  </div>
                </div>
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="inf_filmes.php?titulo=<?php echo urldecode('Homem-Aranha: Sem Volta para Casa')?>" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Assistir agora</a>
                  <a href="#" class="btn btn-link"></a>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
              <a href="video/trailer.mp4" class="video-open playbtn">
                <!-- <img src="images/play.png" class="play" alt="" /> -->
                <!-- <span class="w-trailor">Assistir ao trailer</span> -->
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="slide slick-bg s-bg-2">
        <div class="container-fluid position-relative h-100">
          <div class="slider-inner h-100">
            <div class="row align-items-center h--100">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <a href="javascript:void(0)">
                  <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                    <img src="assets/images/bahviologo.png" class="c-logo" alt="" />
                  </div>
                </a>
                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                  data-delay-in="0.6">
                  Frozen
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                        <?php
                        $filme_id = 15; 
                        $media_avaliacao = calcularMediaAvaliacao($conn, $filme_id);
                        echo gerarEstrelas($media_avaliacao);
                        ?>
                    </ul>
                    <span class="text-white ml-2"><?php echo number_format($media_avaliacao, 1); ?></span>
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2">L</span>
                    <span class="ml-3">1h 42min</span>
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                  Acompanhada por um vendedor de gelo, a
                  jovem e destemida princesa Anna parte em
                  uma jornada por perigosas montanhas de gelo
                  na esperança de encontrar sua irmã, a rainha Elsa, e acabar com a terrível
                  maldição de inverno eterno, que está provocando o congelamento do reino.
                </p>
                <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <div class="text-primary title genres">
                    Genêro: <span class="text-body">Animação</span>
                  </div>
                  <div class="text-primary title tag">
                    Etiquetas:
                    <span class="text-body">Fantasia, Animação, Musical</span>
                  </div>
                </div>
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="inf_filmes.php?titulo=<?php echo urlencode('Frozen - Uma Aventura Congelante') ?>" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Assistir agora</a>
                  <a href="#" class="btn btn-link"></a>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
              <a href="video/trailer.mp4" class="video-open playbtn">
                <!-- <img src="images/play.png" class="play" alt="" />
                <span class="w-trailor">Assistir ao trailer</span> -->
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="slide slick-bg s-bg-6">
        <div class="container-fluid position-relative h-100">
          <div class="slider-inner h-100">
            <div class="row align-items-center h--100">
              <div class="col-xl-6 col-lg-12 col-md-12">
                <a href="javascript:void(0)">
                  <div class="channel-logo" data-animation-in="fadeInLeft" data-delay-in="0.5">
                    <img src="assets/images/bahviologo.png" class="c-logo" alt="" />
                  </div>
                </a>
                <h1 class="slider-text big-title title text-uppercase" data-animation-in="fadeInLeft"
                  data-delay-in="0.6">                  
                  Logan
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                        <?php
                        $filme_id = 9; 
                        $media_avaliacao = calcularMediaAvaliacao($conn, $filme_id);
                        echo gerarEstrelas($media_avaliacao);
                        ?>
                    </ul>
                    <span class="text-white ml-2"><?php echo number_format($media_avaliacao, 1); ?></span>
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2">16+</span>
                    <span class="ml-3">2h 17min</span>
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                Em 2024, os mutantes estão em franco declínio, e as pessoas não sabem o real motivo. 
                Uma organização está transformando as crianças mutantes em verdadeiras assassinas. Wolverine, cansado de tudo e a pedido de um cada vez mais enfraquecido Professor Xavier, 
                precisa proteger a jovem e poderosa Laura Kinney, conhecida como X-23. Enquanto isso, o vilão Nathaniel Essex amplia seu projeto de destruição.

                </p>
                <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <!-- <div class="text-primary title starring">
                    Estrelando:
                    <span class="text-body">Patrick Wilson, Vera Farminga, Ron Livingston</span>
                  </div> -->
                  <div class="text-primary title genres">
                    Genêro: <span class="text-body">Ação</span>
                  </div>
                  <div class="text-primary title tag">
                    Etiquetas:
                    <span class="text-body">Ação, Ficção Científica</span>
                  </div>
                </div>
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="inf_filmes.php?titulo=<?php echo urlencode('Logan')?>" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Assistir agora</a>
                  <a href="#" class="btn btn-link"></a>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-12 col-md-12 trailor-video">
              <a href="video/trailer.mp4" class="video-open playbtn">
                <!-- <img src="images/play.png" class="play" alt="" />
                <span class="w-trailor">Assistir ao trailer</span> -->
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- slider ends -->

    <div class="main-content">

        <!-- upcoming contents section starts  -->
        <section id="iq-upcoming-movie">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Filmes populares</h4>
            </div>
            <div class="favorite-contens">
              <ul class="favorites-slider list-inline row p-0 mb-0">
                <!-- slide item 1 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="https://cinebuzz.com.br/media/uploads/2024/08/o-corvo-adaptacao-moderna-do-cult-de-1994-estreia-nos-cinemas-brasileiros.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_filmes.php?titulo=<?php echo urlencode('O Corvo'); ?>"> O Corvo </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">18+</div>
                        <span class="text-white">1h 51min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('O Corvo'); ?>'">
                          <i class="fa fa-play mr-1"></i>
                          Assistir agora
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <!-- <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">89+</span>
                        </li> -->
                        <li>
                          <span><i class="fa fa-plus"></i></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 2 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="https://capitalfmradio.com.br/wp-content/uploads/2024/09/04154651927263-dtpmWv.jpeg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_filmes.php?titulo=<?php echo urlencode('Os Observadores'); ?>"> Os Observadores </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">14+</div>
                        <span class="text-white">1h 42min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('Os Observadores'); ?>'">
                          <i class="fa fa-play mr-1"></i>
                          Assistir agora
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <!-- <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">35+</span>
                        </li> -->
                        <li class="fav" data-titulo="Os Observadores">
                          <span>
                            <i class="fa <?php echo $favoritado ? 'fa-heart' : 'fa-plus'; ?>"></i>
                          </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 3 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="https://www.vivaocinema.com.br/wp-content/uploads/2019/11/coringa-1.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_filmes.php?titulo=<?php echo urlencode('Coringa'); ?>"> Coringa </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">16+</div>
                        <span class="text-white">2h 2min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('Coringa'); ?>'">
                          <i class="fa fa-play mr-1"></i>
                         Assistir agora
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                        <!-- <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">99+</span>
                        </li> -->
                        <li class="fav" data-titulo="Coringa">
                          <span>
                            <i class="fa <?php echo $favoritado ? 'fa-heart' : 'fa-plus'; ?>"></i>
                          </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 4 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="https://i.pinimg.com/originals/6c/30/ac/6c30ac986c1ea64ad46b5267819d6502.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_filmes.php?titulo=<?php echo urlencode('Logan'); ?>"> Logan </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">16+</div>
                        <span class="text-white">2h 17min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('Logan'); ?>'">
                          <i class="fa fa-play mr-1"></i>
                          Assistir agora
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                                             <!-- <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li> -->
                        <li class="fav" data-titulo="Logan">
                          <span>
                            <i class="fa <?php echo $favoritado ? 'fa-heart' : 'fa-plus'; ?>"></i>
                          </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 5 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="https://thumbnails.cbsig.net/CBS_Production_Entertainment_VMS/2023/11/23/2286720579513/PPMOV_DUNGEONSDRAGONSHONORAMONGTHIEVES_CLEAN_UHD_2438084_1920x1080.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_filmes.php?titulo=<?php echo urlencode('Dungeons & Dragons: Honra Entre Rebeldes'); ?>">Dungeons & Dragons: Honra Entre Rebeldes</a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">12+</div>
                        <span class="text-white">2h 14min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('Dungeons & Dragons: Honra Entre Rebeldes'); ?>'">
                          <i class="fa fa-play mr-1"></i>
                         Assistir agora
                        </span>
                      </div>
                    </div>
                    <div class="block-social-info">
                      <ul class="list-inline p-0 m-0 music-play-lists">
                        <li class="share">
                          <span><i class="fa fa-share-alt"></i></span>
                          <div class="share-box">
                            <div class="d-flex align-items-center">
                              <a href="#" class="share-ico"><i class="fa fa-share-alt"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-youtube"></i></a>
                              <a href="#" class="share-ico"><i class="fa fa-instagram"></i></a>
                            </div>
                          </div>
                        </li>
                                             <!-- <li>
                          <span><i class="fa fa-heart"></i></span>
                          <span class="count-box">19+</span>
                        </li> -->
                        <li class="fav" data-titulo="Dungeons & Dragons: Honra Entre Rebeldes">
                          <span>
                            <i class="fa <?php echo $favoritado ? 'fa-heart' : 'fa-plus'; ?>"></i>
                          </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

        <section id="parallex" class="parallax-window">
            <div class="container-fluid h-100">
                <div class="row align-items-center justify-content-center h-100 parallaxt-details">
                    <div class="col-lg-4 r-mb-23">
                        <div class="text-left">
                            <a href="javascript:void(0)">
                                <h1 class="parallax-heading" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('Avatar')?>'">Avatar</h1>
                            </a>
                            <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                                <!-- <ul
                                    class="ratting-start p-o m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                                    <li>
                                        <a href="#" class="text-primary"><i class="fa fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-primary"><i class="pl-2 fa fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-primary"><i class="pl-2 fa fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-primary"><i class="pl-2 fa fa-star"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-primary"><i class="pl-2 fa fa-star-half-o"></i></a>
                                    </li>
                                </ul>
                                <span class="text-white ml-3">7.8(Imbd)</span> -->
                            </div>
                            <div class="movie-time d-flex align-items-center mb-3">
                                <div class="badge badge-secondary p-1 mr-2">12+</div>
                                <span class="text-white">2h 42min</span>
                            </div>
                            <p>
                                Um fuzileiro naval paraplégico enviado à lua Pandora em uma viagem única
                                missão fica dividida entre seguir suas ordens e
                                protegendo o mundo que ele sente ser seu lar.
                            </p>
                            <div class="parallax-buttons">
                                <a href="inf_filmes.php?titulo=<?php echo urlencode('Avatar')?>" class="btn btn-hover">Assistir agora</a>
                                <!--<a href="#" class="btn btn-link">Mais detalhes</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="parallax-img">
                            <a href="inf_filmes.php?titulo=<?php echo urlencode('Avatar') ?>"><img src="images/parallax/avatar.jpg" alt="" class="img-fluid w-100" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        $sql = "
        SELECT f.titulo, f.ano, f.idade, f.duracao, f.imagem_url
        FROM filmes f
        INNER JOIN filme_categoria fc ON f.id = fc.filme_id
        WHERE fc.categoria_id = 1 ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<section id="iq-suggested" class="s-margin">';
            echo '<div class="container-fluid">';
            echo '<div class="row">';
            echo '<div class="col-sm-12 overflow-hidden">';
            echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
            echo '<h4 class="main-title">Ação</h4>';
            // echo '<a href="#" class="iq-view-all">Ver tudo</a>';
            echo '</div>';
            echo '<div class="favorite-contens">';
            echo '<ul class="favorites-slider list-inline row p-0 mb-0">';

            while ($row = $result->fetch_assoc()) {
                echo '<li class="slide-item">';
                echo '<div class="block-images position-relative">';
                echo '<div class="img-box">';
                echo '<img src="' . $row['imagem_url'] . '" class="img-fluid" alt="" />';
                echo '</div>';
                echo '<div class="block-description">';
                echo '<h6 class="iq-title">';
                echo '<a href="inf_filmes.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
                echo '</h6>';
                echo '<div class="movie-time d-flex align-items-center my-2">';
                echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
                echo '<span class="text-white">' . $row['duracao'] . '</span>';
                echo '</div>';
                echo '<div class="hover-buttons">';
                echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'inf_filmes.php?titulo=' . urlencode($row['titulo']) . '\'">';
                echo '<i class="fa fa-play mr-1"></i>';
                echo 'Assistir agora';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="block-social-info">';
                echo '<ul class="list-inline p-0 m-0 music-play-lists">';
                $favoritado = false;
                echo '<li class="share"><span><i class="fa fa-share-alt"></i></span></li>';
                echo '<li class="fav" data-titulo="' . $row['titulo'] . '">';
                echo '<span>';
                echo '<i class="fa ' . ($favoritado ? 'fa-heart' : 'fa-plus') . '"></i>';
                echo '</span>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
            }

            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>'; 
            echo '</div>';
            echo '</section>';
        } else {
            echo "Nenhum filme de esporte encontrado.";
        }
        ?>
        <?php
        $sql = "
        SELECT f.titulo, f.ano, f.idade, f.duracao, f.imagem_url
        FROM filmes f
        INNER JOIN filme_categoria fc ON f.id = fc.filme_id
        WHERE fc.categoria_id = 11";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<section id="iq-upcoming-movie">';
            echo '<div class="container-fluid">';
            echo '<div class="row">';
            echo '<div class="col-sm-12 overflow-hidden">';
            echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
            echo '<h4 class="main-title">Animação</h4>';
            //echo '<a href="#" class="iq-view-all">Ver tudo</a>';
            echo '</div>';
            echo '<div class="favorite-contens">';
            echo '<ul class="favorites-slider list-inline row p-0 mb-0">';


            while ($row = $result->fetch_assoc()) {
                echo '<li class="slide-item">';
                echo '<div class="block-images position-relative">';
                echo '<div class="img-box">';
                echo '<img src="' . $row['imagem_url'] . '" class="img-fluid" alt="" />';
                echo '</div>';
                echo '<div class="block-description">';
                echo '<h6 class="iq-title">';
                echo '<a href="inf_filmes.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
                echo '</h6>';
                echo '<div class="movie-time d-flex align-items-center my-2">';
                echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
                echo '<span class="text-white">' . $row['duracao'] . '</span>';
                echo '</div>';
                echo '<div class="hover-buttons">';
                echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'inf_filmes.php?titulo=' . urlencode($row['titulo']) . '\'">';
                echo '<i class="fa fa-play mr-1"></i>';
                echo 'Assistir agora';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="block-social-info">';
                echo '<ul class="list-inline p-0 m-0 music-play-lists">';
                $favoritado = false;
                echo '<li class="share"><span><i class="fa fa-share-alt"></i></span></li>';
                echo '<li class="fav" data-titulo="' . $row['titulo'] . '">';
                echo '<span>';
                echo '<i class="fa ' . ($favoritado ? 'fa-heart' : 'fa-plus') . '"></i>';
                echo '</span>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }

            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>'; 
            echo '</div>';
            echo '</section>';
        } else {
            echo "Nenhum filme encontrado.";
        }
        ?>

<?php
        $sql = "
        SELECT f.titulo, f.ano, f.idade, f.duracao, f.imagem_url
        FROM filmes f
        INNER JOIN filme_categoria fc ON f.id = fc.filme_id
        WHERE fc.categoria_id = 3";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<section id="iq-upcoming-movie">';
            echo '<div class="container-fluid">';
            echo '<div class="row">';
            echo '<div class="col-sm-12 overflow-hidden">';
            echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
            echo '<h4 class="main-title">Aventura</h4>';
            //echo '<a href="#" class="iq-view-all">Ver tudo</a>';
            echo '</div>';
            echo '<div class="favorite-contens">';
            echo '<ul class="favorites-slider list-inline row p-0 mb-0">';


            while ($row = $result->fetch_assoc()) {
                echo '<li class="slide-item">';
                echo '<div class="block-images position-relative">';
                echo '<div class="img-box">';
                echo '<img src="' . $row['imagem_url'] . '" class="img-fluid" alt="" />';
                echo '</div>';
                echo '<div class="block-description">';
                echo '<h6 class="iq-title">';
                echo '<a href="inf_filmes.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
                echo '</h6>';
                echo '<div class="movie-time d-flex align-items-center my-2">';
                echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
                echo '<span class="text-white">' . $row['duracao'] . '</span>';
                echo '</div>';
                echo '<div class="hover-buttons">';
                echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'inf_filmes.php?titulo=' . urlencode($row['titulo']) . '\'">';
                echo '<i class="fa fa-play mr-1"></i>';
                echo 'Assistir agora';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="block-social-info">';
                echo '<ul class="list-inline p-0 m-0 music-play-lists">';
                $favoritado = false;
                echo '<li class="share"><span><i class="fa fa-share-alt"></i></span></li>';
                echo '<li class="fav" data-titulo="' . $row['titulo'] . '">';
                echo '<span>';
                echo '<i class="fa ' . ($favoritado ? 'fa-heart' : 'fa-plus') . '"></i>';
                echo '</span>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }

            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>'; 
            echo '</div>';
            echo '</section>';
        } else {
            echo "Nenhum filme encontrado.";
        }
        ?>

    <?php
       $sql = "
       SELECT f.titulo, f.ano, f.idade, f.duracao, f.imagem_url
       FROM filmes f
       INNER JOIN filme_categoria fc ON f.id = fc.filme_id
       WHERE fc.categoria_id = 6";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<section id="iq-upcoming-movie">';
            echo '<div class="container-fluid">';
            echo '<div class="row">';
            echo '<div class="col-sm-12 overflow-hidden">';
            echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
            echo '<h4 class="main-title">Drama</h4>';
            // echo '<a href="#" class="iq-view-all">Ver tudo</a>';
            echo '</div>';
            echo '<div class="favorite-contens">';
            echo '<ul class="favorites-slider list-inline row p-0 mb-0">';


            while ($row = $result->fetch_assoc()) {
                echo '<li class="slide-item">';
                echo '<div class="block-images position-relative">';
                echo '<div class="img-box">';
                echo '<img src="' . $row['imagem_url'] . '" class="img-fluid" alt="" />';
                echo '</div>';
                echo '<div class="block-description">';
                echo '<h6 class="iq-title">';
                echo '<a href="inf_filmes.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
                echo '</h6>';
                echo '<div class="movie-time d-flex align-items-center my-2">';
                echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
                echo '<span class="text-white">' . $row['duracao'] . '</span>';
                echo '</div>';
                echo '<div class="hover-buttons">';
                echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'inf_filmes.php?titulo=' . urlencode($row['titulo']) . '\'">';
                echo '<i class="fa fa-play mr-1"></i>';
                echo 'Assistir agora';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="block-social-info">';
                echo '<ul class="list-inline p-0 m-0 music-play-lists">';
                $favoritado = false;
                echo '<li class="share"><span><i class="fa fa-share-alt"></i></span></li>';
                echo '<li class="fav" data-titulo="' . $row['titulo'] . '">';
                echo '<span>';
                echo '<i class="fa ' . ($favoritado ? 'fa-heart' : 'fa-plus') . '"></i>';
                echo '</span>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }

            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</section>';
        } else {
            echo "Nenhum filme encontrado.";
        }
        ?>

        <?php
        $sql = "
        SELECT f.titulo, f.ano, f.idade, f.duracao, f.imagem_url
        FROM filmes f
        INNER JOIN filme_categoria fc ON f.id = fc.filme_id
        WHERE fc.categoria_id = 4";

        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            echo '<section id="iq-upcoming-movie">';
            echo '<div class="container-fluid">';
            echo '<div class="row">';
            echo '<div class="col-sm-12 overflow-hidden">';
            echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
            echo '<h4 class="main-title">Fantasia</h4>';
            // echo '<a href="#" class="iq-view-all">Ver tudo</a>';
            echo '</div>';
            echo '<div class="favorite-contens">';
            echo '<ul class="favorites-slider list-inline row p-0 mb-0">';

          
            while ($row = $result->fetch_assoc()) {
                echo '<li class="slide-item">';
                echo '<div class="block-images position-relative">';
                echo '<div class="img-box">';
                echo '<img src="' . $row['imagem_url'] . '" class="img-fluid" alt="" />';
                echo '</div>';
                echo '<div class="block-description">';
                echo '<h6 class="iq-title">';
                echo '<a href="inf_filmes.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
                echo '</h6>';
                echo '<div class="movie-time d-flex align-items-center my-2">';
                echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
                echo '<span class="text-white">' . $row['duracao'] . '</span>';
                echo '</div>';
                echo '<div class="hover-buttons">';
                echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'inf_filmes.php?titulo=' . urlencode($row['titulo']) . '\'">';
                echo '<i class="fa fa-play mr-1"></i>';
                echo 'Assistir agora';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="block-social-info">';
                echo '<ul class="list-inline p-0 m-0 music-play-lists">';
                $favoritado = false;
                echo '<li class="share"><span><i class="fa fa-share-alt"></i></span></li>';
                echo '<li class="fav" data-titulo="' . $row['titulo'] . '">';
                echo '<span>';
                echo '<i class="fa ' . ($favoritado ? 'fa-heart' : 'fa-plus') . '"></i>';
                echo '</span>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }

            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</section>';
        } else {
            echo "Nenhum filme encontrado.";
        }
        ?>
                <?php
        $sql = "
        SELECT f.titulo, f.ano, f.idade, f.duracao, f.imagem_url
        FROM filmes f
        INNER JOIN filme_categoria fc ON f.id = fc.filme_id
        WHERE fc.categoria_id = 5";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<section id="iq-upcoming-movie">';
            echo '<div class="container-fluid">';
            echo '<div class="row">';
            echo '<div class="col-sm-12 overflow-hidden">';
            echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
            echo '<h4 class="main-title">Ficção Científica</h4>';
            // echo '<a href="#" class="iq-view-all">Ver tudo</a>';
            echo '</div>';
            echo '<div class="favorite-contens">';
            echo '<ul class="favorites-slider list-inline row p-0 mb-0">';

          
            while ($row = $result->fetch_assoc()) {
                echo '<li class="slide-item">';
                echo '<div class="block-images position-relative">';
                echo '<div class="img-box">';
                echo '<img src="' . $row['imagem_url'] . '" class="img-fluid" alt="" />';
                echo '</div>';
                echo '<div class="block-description">';
                echo '<h6 class="iq-title">';
                echo '<a href="inf_filmes.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
                echo '</h6>';
                echo '<div class="movie-time d-flex align-items-center my-2">';
                echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
                echo '<span class="text-white">' . $row['duracao'] . '</span>';
                echo '</div>';
                echo '<div class="hover-buttons">';
                echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'inf_filmes.php?titulo=' . urlencode($row['titulo']) . '\'">';
                echo '<i class="fa fa-play mr-1"></i>';
                echo 'Assistir agora';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="block-social-info">';
                echo '<ul class="list-inline p-0 m-0 music-play-lists">';
                $favoritado = false;
                echo '<li class="share"><span><i class="fa fa-share-alt"></i></span></li>';
                echo '<li class="fav" data-titulo="' . $row['titulo'] . '">';
                echo '<span>';
                echo '<i class="fa ' . ($favoritado ? 'fa-heart' : 'fa-plus') . '"></i>';
                echo '</span>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }

            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</section>';
        } else {
            echo "Nenhum filme encontrado.";
        }
        ?>





        <?php
        $sql = "
        SELECT f.titulo, f.ano, f.idade, f.duracao, f.imagem_url
        FROM filmes f
        INNER JOIN filme_categoria fc ON f.id = fc.filme_id
        WHERE fc.categoria_id = 10";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<section id="iq-upcoming-movie">';
            echo '<div class="container-fluid">';
            echo '<div class="row">';
            echo '<div class="col-sm-12 overflow-hidden">';
            echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
            echo '<h4 class="main-title">Mistério</h4>';
            // echo '<a href="#" class="iq-view-all">Ver tudo</a>';
            echo '</div>';
            echo '<div class="favorite-contens">';
            echo '<ul class="favorites-slider list-inline row p-0 mb-0">';

          
            while ($row = $result->fetch_assoc()) {
                echo '<li class="slide-item">';
                echo '<div class="block-images position-relative">';
                echo '<div class="img-box">';
                echo '<img src="' . $row['imagem_url'] . '" class="img-fluid" alt="" />';
                echo '</div>';
                echo '<div class="block-description">';
                echo '<h6 class="iq-title">';
                echo '<a href="inf_filmes.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
                echo '</h6>';
                echo '<div class="movie-time d-flex align-items-center my-2">';
                echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
                echo '<span class="text-white">' . $row['duracao'] . '</span>';
                echo '</div>';
                echo '<div class="hover-buttons">';
                echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'inf_filmes.php?titulo=' . urlencode($row['titulo']) . '\'">';
                echo '<i class="fa fa-play mr-1"></i>';
                echo 'Assistir agora';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="block-social-info">';
                echo '<ul class="list-inline p-0 m-0 music-play-lists">';
                $favoritado = false;
                echo '<li class="share"><span><i class="fa fa-share-alt"></i></span></li>';
                echo '<li class="fav" data-titulo="' . $row['titulo'] . '">';
                echo '<span>';
                echo '<i class="fa ' . ($favoritado ? 'fa-heart' : 'fa-plus') . '"></i>';
                echo '</span>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }

            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</section>';
        } else {
            echo "Nenhum filme encontrado.";
        }
        ?>
        <?php
        $sql = "
        SELECT f.titulo, f.ano, f.idade, f.duracao, f.imagem_url
        FROM filmes f
        INNER JOIN filme_categoria fc ON f.id = fc.filme_id
        WHERE fc.categoria_id = 12";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<section id="iq-upcoming-movie">';
            echo '<div class="container-fluid">';
            echo '<div class="row">';
            echo '<div class="col-sm-12 overflow-hidden">';
            echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
            echo '<h4 class="main-title">Musical</h4>';
            //echo '<a href="#" class="iq-view-all">Ver tudo</a>';
            echo '</div>';
            echo '<div class="favorite-contens">';
            echo '<ul class="favorites-slider list-inline row p-0 mb-0">';


            while ($row = $result->fetch_assoc()) {
                echo '<li class="slide-item">';
                echo '<div class="block-images position-relative">';
                echo '<div class="img-box">';
                echo '<img src="' . $row['imagem_url'] . '" class="img-fluid" alt="" />';
                echo '</div>';
                echo '<div class="block-description">';
                echo '<h6 class="iq-title">';
                echo '<a href="inf_filmes.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
                echo '</h6>';
                echo '<div class="movie-time d-flex align-items-center my-2">';
                echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
                echo '<span class="text-white">' . $row['duracao'] . '</span>';
                echo '</div>';
                echo '<div class="hover-buttons">';
                echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'inf_filmes.php?titulo=' . urlencode($row['titulo']) . '\'">';
                echo '<i class="fa fa-play mr-1"></i>';
                echo 'Assistir agora';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="block-social-info">';
                echo '<ul class="list-inline p-0 m-0 music-play-lists">';
                $favoritado = false;
                echo '<li class="share"><span><i class="fa fa-share-alt"></i></span></li>';
                echo '<li class="fav" data-titulo="' . $row['titulo'] . '">';
                echo '<span>';
                echo '<i class="fa ' . ($favoritado ? 'fa-heart' : 'fa-plus') . '"></i>';
                echo '</span>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }

            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>'; 
            echo '</div>';
            echo '</section>';
        } else {
            echo "Nenhum filme encontrado.";
        }
        ?>

<?php
       $sql = "
       SELECT f.titulo, f.ano, f.idade, f.duracao, f.imagem_url
       FROM filmes f
       INNER JOIN filme_categoria fc ON f.id = fc.filme_id
       WHERE fc.categoria_id = 9";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo '<section id="iq-upcoming-movie">';
            echo '<div class="container-fluid">';
            echo '<div class="row">';
            echo '<div class="col-sm-12 overflow-hidden">';
            echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
            echo '<h4 class="main-title">Terror</h4>';
            // echo '<a href="#" class="iq-view-all">Ver tudo</a>';
            echo '</div>';
            echo '<div class="favorite-contens">';
            echo '<ul class="favorites-slider list-inline row p-0 mb-0">';


            while ($row = $result->fetch_assoc()) {
                echo '<li class="slide-item">';
                echo '<div class="block-images position-relative">';
                echo '<div class="img-box">';
                echo '<img src="' . $row['imagem_url'] . '" class="img-fluid" alt="" />';
                echo '</div>';
                echo '<div class="block-description">';
                echo '<h6 class="iq-title">';
                echo '<a href="inf_filmes.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
                echo '</h6>';
                echo '<div class="movie-time d-flex align-items-center my-2">';
                echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
                echo '<span class="text-white">' . $row['duracao'] . '</span>';
                echo '</div>';
                echo '<div class="hover-buttons">';
                echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'inf_filmes.php?titulo=' . urlencode($row['titulo']) . '\'">';
                echo '<i class="fa fa-play mr-1"></i>';
                echo 'Assistir agora';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="block-social-info">';
                echo '<ul class="list-inline p-0 m-0 music-play-lists">';
                $favoritado = false;
                echo '<li class="share"><span><i class="fa fa-share-alt"></i></span></li>';
                echo '<li class="fav" data-titulo="' . $row['titulo'] . '">';
                echo '<span>';
                echo '<i class="fa ' . ($favoritado ? 'fa-heart' : 'fa-plus') . '"></i>';
                echo '</span>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }

            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</section>';
        } else {
            echo "Nenhum filme encontrado.";
        }
        ?>


        <?php include_once('includes/footer.php'); ?>

    </div>
    <!-- js files  -->
    <script>
            document.querySelectorAll('.fav').forEach(function (fav) {
              fav.addEventListener('click', function (e) {
                e.preventDefault(); // Previne a navegação padrão

                // Obter título do filme do atributo data
                var titulo = this.getAttribute('data-titulo');
                var icon = this.querySelector('i');

                // Determinar a ação com base na classe atual
                var favoritar = icon.classList.contains('fa-plus');

                // Enviar a requisição Ajax
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "favoritar.php?titulo=" + encodeURIComponent(titulo) + "&favoritar=" + favoritar, true);
                xhr.onreadystatechange = function () {
                  if (xhr.readyState === 4 && xhr.status === 200) {
                    // Alternar o ícone com base no novo estado
                    if (favoritar) {
                      icon.classList.remove('fa-plus');
                      icon.classList.add('fa-heart');
                    } else {
                      icon.classList.remove('fa-heart');
                      icon.classList.add('fa-plus');
                    }
                  }
                };
                xhr.send();
              });
            });


        </script>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/slick-animation.min.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>