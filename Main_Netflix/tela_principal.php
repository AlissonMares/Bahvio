<?php
include 'includes/logo-page.php';
include ('funcoes_avaliacoes.php');
include_once ('conexao/connect.php');
session_start();

$usuario_id = isset($_SESSION['id']) ? $_SESSION['id'] : null;

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Video Streaming</title>
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
      <div class="slide slick-bg s-bg-3">
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
                    Gotham
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                        <?php
                        $serie_id = 16; 
                        $media_avaliacao = calcularMediaAvaliacao($conn, null, $serie_id);
                        echo gerarEstrelas($media_avaliacao);
                        ?>
                    </ul>
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2">16+</span>
                    <span class="ml-3">5 temporadas</span>
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                O tenente James Gordon chega a Gotham com o intuito de combater a corrupção. 
                Gordon tenta fazer a diferença e começa investigando o assassinato de Thomas e Martha Wayne, cujas mortes deixaram órfão seu filho Bruce.

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
                    <span class="text-body">Ação, Drama, Ficção Científica</span>
                  </div>
                </div>
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="inf_series.php?titulo=<?php echo urlencode('Gotham')?>" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Assistir agora</a>
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
  <?php

    $sql = "SELECT f.id, f.usuario_id, f.serie_id, f.filme_id,
                  s.titulo AS serie_titulo, s.imagem_url AS serie_imagem, s.idade AS serie_idade, s.temporada AS serie_temporada,
                  fm.titulo AS filme_titulo, fm.imagem_url AS filme_imagem, fm.idade AS filme_idade, fm.duracao AS filme_duracao
            FROM favoritos f
            LEFT JOIN series s ON f.serie_id = s.id
            LEFT JOIN filmes fm ON f.filme_id = fm.id
            WHERE f.usuario_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $_SESSION['id']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      echo '<section id="iq-suggested" class="s-margin">';
      echo '<div class="container-fluid">';
      echo '<div class="row">';
      echo '<div class="col-sm-12 overflow-hidden">';
      echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
      echo '<h4 class="main-title">Minha lista</h4>';
      // echo '<a href="#" class="iq-view-all">Ver tudo</a>';
      echo '</div>';
      echo '<div class="favorite-contens">';
      echo '<ul class="favorites-slider list-inline row p-0 mb-0">';

        // Exibe cada item favorito
        while ($row = $result->fetch_assoc()) {
            // Exibe informações da série
            if ($row['serie_id'] !== NULL) {
                echo '<li class="slide-item">';
                echo '<div class="block-images position-relative">';
                echo '<div class="img-box">';
                echo '<img src="' . $row['serie_imagem'] . '" class="img-fluid" alt="Imagem da série" />';
                echo '</div>';
                echo '<div class="block-description">';
                echo '<h6 class="iq-title">';
                echo '<a href="inf_series.php?titulo=' . urlencode($row['serie_titulo']) . '">' . $row['serie_titulo'] . '</a>';
                echo '</h6>';
                echo '<div class="movie-time d-flex align-items-center my-2">';
                echo '<div class="badge badge-secondary p-1 mr-2">' . $row['serie_idade'] . '</div>';
                echo '<span class="text-white">' . $row['serie_temporada'] . '</span>';
                echo '</div>';
                echo '<div class="hover-buttons">';
                echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'inf_series.php?titulo=' . urlencode($row['serie_titulo']) . '\'">';
                echo '<i class="fa fa-play mr-1"></i>';
                echo 'Assistir agora';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="block-social-info">';
                echo '<ul class="list-inline p-0 m-0 music-play-lists">';
                $favoritado = false;
                echo '<li class="share"><span><i class="fa fa-share-alt"></i></span></li>';
                echo '<li class="fav" data-titulo="' . $row['serie_titulo'] . '">';
                echo '<span>';
                echo '<i class="fa ' . ($favoritado ? 'fa-heart' : 'fa-plus') . '"></i>';
                echo '</span>';
                echo '</li>';;
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }

            // Exibe informações do filme
            elseif ($row['filme_id'] !== NULL) {
                echo '<li class="slide-item">';
                echo '<div class="block-images position-relative">';
                echo '<div class="img-box">';
                echo '<img src="' . $row['filme_imagem'] . '" class="img-fluid" alt="Imagem do filme" />';
                echo '</div>';
                echo '<div class="block-description">';
                echo '<h6 class="iq-title">';
                echo '<a href="inf_filmes.php?titulo=' . urlencode($row['filme_titulo']) . '">' . $row['filme_titulo'] . '</a>';
                echo '</h6>';
                echo '<div class="movie-time d-flex align-items-center my-2">';
                echo '<div class="badge badge-secondary p-1 mr-2">' . $row['filme_idade'] . '</div>';
                echo '<span class="text-white">' . $row['filme_duracao'] . '</span>';
                echo '</div>';
                echo '<div class="hover-buttons">';
                echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'inf_filmes.php?titulo=' . urlencode($row['filme_titulo']) . '\'">';
                echo '<i class="fa fa-play mr-1"></i>';
                echo 'Assistir agora';
                echo '</span>';
                echo '</div>';
                echo '</div>';
                echo '<div class="block-social-info">';
                echo '<ul class="list-inline p-0 m-0 music-play-lists">';
                $favoritado = false;
                echo '<li class="share"><span><i class="fa fa-share-alt"></i></span></li>';
                echo '<li class="fav" data-titulo="' . $row['filme_titulo'] . '">';
                echo '<span>';
                echo '<i class="fa ' . ($favoritado ? 'fa-heart' : 'fa-plus') . '"></i>';
                echo '</span>';
                echo '</li>';
                echo '</ul>';
                echo '</div>';
                echo '</div>';
                echo '</li>';
            }
        }

        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    }
    ?>
  <!-- main content starts  -->
  <div class="main-content">
    <!-- favorite section starts   -->

    <section id="iq-favorites">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Principais escolhas para você</h4>
            </div>
            <div class="favorite-contens">
              <ul class="favorites-slider list-inline row p-0 mb-0">
                <!-- slide item 1 -->

                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="https://rollingstone.com.br/media/uploads/2024/04/5-destaques-do-novo-trailer-de-deadpool-wolverine-foto-reproducaomarvel-studios-4.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                      <a href="inf_filmes.php?titulo=<?php echo urlencode('Deadpool & Wolverine'); ?>">Deadpool & Wolverine</a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">18+</div>
                        <span class="text-white"> 2h 7min </span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('Deadpool & Wolverine'); ?>'">
                          <i class="fa fa-play mr-1"></i>
                          Assitir agora
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
                        <li class="fav" data-titulo="Deadpool & Wolverine">
                          <span>
                            <i class="fa <?php echo $favoritado ? 'fa-heart' : 'fa-plus'; ?>"></i>
                          </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 2 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="https://wallpapers.com/images/hd/eleitos-de-piratas-do-caribe-on-stranger-tides-gwtr676q8u9q4jh4.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_filmes.php?titulo=<?php echo urlencode('Piratas do Caribe: Navegando em Águas Misteriosas'); ?>"> Piratas do Caribe: Navegando em Águas Misteriosas </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">12+</div>
                        <span class="text-white">2h 21min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('Piratas do Caribe: Navegando em Águas Misteriosas'); ?>'">
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
                          <span class="count-box">58+</span>
                        </li> -->
                        <li class="fav" data-titulo="Piratas do Caribe: Navegando em Águas Misteriosas">
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
                      <img src="https://one-cinema.s3.sa-east-1.amazonaws.com/filmes/five-feet-apart/10062020/1920/background-five-feet-apart.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_filmes.php?titulo=<?php echo urlencode('A Cinco Passos de Você'); ?>"> A Cinco Passos de Você </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">12+</div>
                        <span class="text-white">1h 57min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('A Cinco Passos de Você'); ?>'">
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
                        </li>  -->
                        <li class="fav" data-titulo="A Cinco Passos de Você">
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
                      <img src="https://marte.art.br/marte/wp-content/uploads/2022/10/sa-out-4.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_filmes.php?titulo=<?php echo urlencode('Animais Fantásticos: Os Segredos de Dumbledore'); ?>"> Animais Fantásticos: Os Segredos de Dumbledore </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">12+</div>
                        <span class="text-white">2h 23min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('Animais Fantásticos: Os Segredos de Dumbledore'); ?>'">
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
                        <li class="fav" data-titulo="Animais Fantásticos: Os Segredos de Dumbledore">
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
                      <img src="https://wallpapers.com/images/hd/doutor-estranho-super-heroi-1920-x-1080-8xjihu02rmxp4v89.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_filmes.php?titulo=<?php echo urlencode('Doutor Estranho'); ?>"> Doutor Estranho </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">12+</div>
                        <span class="text-white">1h 55min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('Doutor Estranho'); ?>'">
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
                        <li class="fav" data-titulo="Doutor Estranho">
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

    <!-- favourite section ends -->
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
                        <li class="fav" data-titulo="O Corvo">
                          <span>
                            <i class="fa <?php echo $favoritado ? 'fa-heart' : 'fa-plus'; ?>"></i>
                          </span>
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
    <!-- upcoming contents section ends -->

    <!-- top ten trending  -->

    <section id="iq-topten">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="topten-contents">
              <h4 class="main-title iq-title topten-title">
                Séries populares
              </h4>
              <ul id="top-ten-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                <li class="slick-bg">
                  <a href="#">
                    <img src="https://images8.alphacoders.com/115/thumb-1920-1159526.jpg" class="img-fluid w-100" alt="" />
                    <h6 class="iq-title"><a href="#"> Lúcifer </a></h6>
                  </a>
                </li>
                <li class="slick-bg">
                  <a href="#">
                    <img src="images/top-10/02.jpg" class="img-fluid w-100" alt="" />
                    <h6 class="iq-title">
                      <a href="#">O Gambito da Rainha</a>
                    </h6>
                  </a>
                </li>
                <li class="slick-bg">
                  <a href="#">
                    <img src="https://images.hdqwalls.com/download/khaleesi-game-of-thrones-5k-k4-1920x1080.jpg" class="img-fluid w-100" alt="" />
                    <h6 class="iq-title"><a href="#">Game of Thrones</a></h6>
                  </a>
                </li>
                <li class="slick-bg">
                  <a href="#">
                    <img src="https://images3.alphacoders.com/132/1321784.jpeg" class="img-fluid w-100" alt="" />
                    <h6 class="iq-title"><a href="#">The Witcher</a></h6>
                  </a>
                </li>
                <li class="slick-bg">
                  <a href="#">
                    <img src="https://wallpapers.com/images/hd/rings-of-power-middle-earth-kingdom-2spg3lhgcqr7ypox.jpg" class="img-fluid w-100" alt="" />
                    <h6 class="iq-title"><a href="#">O Senhor dos Anéis: Os Anéis de Poder</a></h6>
                  </a>
                </li>
                <li class="slick-bg">
                  <a href="#">
                    <img src="images/top-10/06.jpg" class="img-fluid w-100" alt="" />
                    <h6 class="iq-title"><a href="#">Peaky Blinders</a></h6>
                  </a>
                </li>
              </ul>
              <div class="vertical_s">
                <ul id="top-ten-slider-nav" class="list-inline p-0 m-0 d-flex align-items-center">
                  <li>
                    <div class="block-images position-relative">
                      <a href="#">
                        <img src="https://images8.alphacoders.com/115/thumb-1920-1159526.jpg" class="img-fluid w-100" alt="" />
                      </a>
                      <div class="block-description">
                        <h5>Lúcifer</h5>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">
                            16+
                          </div>
                          <span class="text-white">6 Temporadas</span>
                        </div>
                        <div class="hover-buttons">
                          <a href="inf_series.php?titulo=<?php echo urlencode('Lúcifer'); ?>" class="btn btn-hover" tabindex="0">
                            <i class="fa fa-play mr-1" aria-hidden="true"></i>
                            Assistir agora
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block-images position-relative">
                      <a href="#">
                        <img src="images/top-10/02.jpg" class="img-fluid w-100" alt="" />
                      </a>
                      <div class="block-description">
                        <h5>O Gambito da Rainha</h5>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">
                            18+
                          </div>
                          <span class="text-white">1 Temporada</span>
                        </div>
                        <div class="hover-buttons">
                          <a href="inf_series.php?titulo=<?php echo urlencode('O Gambito da Rainha'); ?>" class="btn btn-hover" tabindex="0">
                            <i class="fa fa-play mr-1" aria-hidden="true"></i>
                            Assistir agora
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block-images position-relative">
                      <a href="#">
                        <img src="https://images.hdqwalls.com/download/khaleesi-game-of-thrones-5k-k4-1920x1080.jpg" class="img-fluid w-100" alt="" />
                      </a>
                      <div class="block-description">
                        <h5>Game of Thrones</h5>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">
                            16+
                          </div>
                          <span class="text-white">8 Temporadas</span>
                        </div>
                        <div class="hover-buttons">
                          <a href="inf_series.php?titulo=<?php echo urlencode('Game of Thrones'); ?>" class="btn btn-hover" tabindex="0">
                            <i class="fa fa-play mr-1" aria-hidden="true"></i>
                            Assistir agora
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block-images position-relative">
                      <a href="#">
                        <img src="https://images3.alphacoders.com/132/1321784.jpeg" class="img-fluid w-100" alt="" />
                      </a>
                      <div class="block-description">
                        <h5>The Witcher</h5>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">
                            18+
                          </div>
                          <span class="text-white">3 Temporadas</span>
                        </div>
                        <div class="hover-buttons">
                          <a href="inf_series.php?titulo=<?php echo urlencode('The Witcher'); ?>" class="btn btn-hover" tabindex="0">
                            <i class="fa fa-play mr-1" aria-hidden="true"></i>
                            Assistir agora
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block-images position-relative">
                      <a href="#">
                        <img src="https://wallpapers.com/images/hd/rings-of-power-middle-earth-kingdom-2spg3lhgcqr7ypox.jpg" class="img-fluid w-100" alt="" />
                      </a>
                      <div class="block-description">
                        <h5>O Senhor dos Anéis: Os Anéis de Poder</h5>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">
                            14+
                          </div>
                          <span class="text-white">2 Temporadas</span>
                        </div>
                        <div class="hover-buttons">
                          <a href="inf_series.php?titulo=<?php echo urlencode('O Senhor dos Anéis: Os Anéis de Poder'); ?>" class="btn btn-hover" tabindex="0">
                            <i class="fa fa-play mr-1" aria-hidden="true"></i>
                            Assistir agora
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="block-images position-relative">
                      <a href="#">
                        <img src="images/top-10/06.jpg" class="img-fluid w-100" alt="" />
                      </a>
                      <div class="block-description">
                        <h5>Peaky Blinders</h5>
                        <div class="movie-time d-flex align-items-center my-2">
                          <div class="badge badge-secondary p-1 mr-2">
                            16+
                          </div>
                          <span class="text-white">6 Temporadas</span>
                        </div>
                        <div class="hover-buttons">
                          <a href="inf_series.php?titulo=<?php echo urlencode('Peaky Blinders'); ?>" class="btn btn-hover" tabindex="0">
                            <i class="fa fa-play mr-1" aria-hidden="true"></i>
                            Assistir agora
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="iq-suggested" class="s-margin">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Séries e Filmes</h4>
            </div>
            <div class="favorite-contens">
              <ul class="favorites-slider list-inline row p-0 mb-0">
                <!-- slide item 1 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="https://media-manager.noticiasaominuto.com.br/1920/naom_63909aaa0893f.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_series.php?titulo=<?php echo urlencode('Wandinha')?>"> Wandinha </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">16+</div>
                        <span class="text-white">1 Temporada</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_series.php?titulo=<?php echo urlencode('Wandinha') ?>'">
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
                        <li class="fav" data-titulo="Wandinha">
                          <span>
                            <i class="fa <?php echo $favoritado ? 'fa-heart' : 'fa-plus'; ?>"></i>
                          </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <!-- slide item 2 -->
                <li class="slide-item">
                  <div class="block-images position-relative">
                    <div class="img-box">
                      <img src="https://rollingstone.com.br/media/uploads/2024/03/donzela-filme-millie-bobby-brown-atriz-foto-john-wilson-netflix.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_filmes.php?titulo=<?php echo urlencode('Donzela')?>"> Donzela </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">14+</div>
                        <span class="text-white">1h 50min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('Donzela')?>'">
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
                        <li class="fav" data-titulo="Donzela">
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
                      <img src="https://tm.ibxk.com.br/2024/10/21/21134617277162.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_filmes.php?titulo=<?php echo urlencode('Através das Sombras')?>"> Através das Sombras </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">18+</div>
                        <span class="text-white">2h 24min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('Através das Sombras')?>'">
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
                        <li class="fav" data-titulo="Através das Sombras">
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
                      <img src="https://c.wallhere.com/photos/a6/d5/1920x1080_px_Vikings_TV_Series-590687.jpg!d" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_series.php?titulo=<?php echo urlencode('Vikings') ?>"> Vikings </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">16+</div>
                        <span class="text-white">6 temporadas</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_series.php?titulo=<?php echo urlencode('Vikings') ?>'">
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
                        <li class="fav" data-titulo="Vikings">
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
                      <img src="https://m.media-amazon.com/images/S/pv-target-images/bd72847e8c1e4e72f80cfb614ddc639866e4d96a2b1c8b93d474d31cf22791de.jpg" class="img-fluid" alt="" />
                    </div>
                    <div class="block-description">
                      <h6 class="iq-title">
                        <a href="inf_filmes.php?titulo=<?php echo urlencode('Gato de Botas 2: O Último Pedido') ?>"> Gato de Botas 2: O Último Pedido </a>
                      </h6>
                      <div class="movie-time d-flex align-items-center my-2">
                        <div class="badge badge-secondary p-1 mr-2">L</div>
                        <span class="text-white">1h 42min</span>
                      </div>
                      <div class="hover-buttons">
                        <span class="btn btn-hover iq-button" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('Gato de Botas 2: O Último Pedido') ?>'">
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
                        <li class="fav" data-titulo="Vikings">
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

    <!-- parallax section  -->
    <section id="parallex" class="parallax-window">
      <div class="container-fluid h-100">
        <div class="row align-items-center justify-content-center h-100 parallaxt-details">
          <div class="col-lg-4 r-mb-23">
            <div class="text-left">
              <a href="javascript:void(0)">
                <h1 class="parallax-heading" onclick="window.location.href='inf_filmes.php?titulo=<?php echo urlencode('Avatar')?>'">Avatar</h1>
              </a>
              <div class="parallax-ratting d-flex align-items-center mt-3 mb-3">
                <ul
                  class="ratting-start p-o m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                  <?php
                        $filme_id = 26; 
                        $media_avaliacao = calcularMediaAvaliacao($conn, $filme_id, null);
                        echo gerarEstrelas($media_avaliacao);
                    ?>
                </ul>
                <span class="text-white ml-3"><?php echo number_format($media_avaliacao, 1); ?></span> 
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
                <a href="#" class="btn btn-link"></a>
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


    <section id="iq-trending" class="s-margin">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
              <h4 class="main-title">Tendências</h4>
            </div>
            <div class="trending-contens">
              <ul id="trending-slider-nav" class="list-inline p-0 mb-0 row align-items-center">
                <li>
                  <a href="javascript:void(0);">
                    <div class="movie-slick position-relative">
                      <img src="images/trending/01.jpg" class="img-fluid" alt="">
                    </div>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <div class="movie-slick position-relative">
                      <img src="https://wallpapercave.com/wp/wp2732715.jpg" class="img-fluid" alt="">
                    </div>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <div class="movie-slick position-relative">
                      <img src="images/trending/03.jpg" class="img-fluid" alt="">
                    </div>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <div class="movie-slick position-relative">
                      <img src="https://blog.vidangel.com/wp-content/uploads/2022/08/LockeAndKey_Blog_Image.jpg" class="img-fluid" alt="">
                    </div>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <div class="movie-slick position-relative">
                      <img src="https://t2.tudocdn.net/628463?w=1920&h=1080" class="img-fluid" alt="">
                    </div>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                    <div class="movie-slick position-relative">
                      <img src="https://cinebuzz.com.br/media/uploads/2024/09/round-6-ganha-poster-oficial-da-2a-temporada-e-data-do-teaser.jpg" class="img-fluid" alt="">
                    </div>
                  </a>
                </li>

              </ul>
              <ul id="trending-slider" class="list-inline p-0 m-0 d-flex align-items-center">
                <li>
                  <div class="tranding-block position-relative" style="background-image: url(images/trending/01.jpg);">
                    <div class="trending-custom-tab">
                      <div class="tab-title-info position-relative">
                        <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                          <li class="nav-item">
                            <a href="#trending-data1" class="nav-link active show" data-toggle="pill" role="tab" aria-selected="true">
                              Visão geral
                            </a>
                          </li>
                           <!-- <li class="nav-item">
                            <a href="#trending-data2" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Episódios
                            </a>
                          </li>  -->
                          <!-- <li class="nav-item">
                            <a href="#trending-data3" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Trailers
                            </a>
                          </li> -->
                          <!-- <li class="nav-item">
                            <a href="#trending-data4" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                             Semelhante a este
                            </a>
                          </li> -->
                        </ul>
                      </div>
                      <div class="trending-content">
                        <div id="trending-data1" class="overview-tab tab-pane fade active show">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="javascript:void(0);" tabindex="0">
                              <div class="res-logo">
                                <div class="channel-logo">
                                  <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                                </div>
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">The Crown</h1>
                            <div class="d-flex align-items-center text-white text-detail">
                              <span class="badge badge-secondary p-3">16+</span>
                              <span class="ml-3">6 Temporadas</span>
                              <span class="trending-year">2016</span>
                            </div>
                            <div class="d-flex align-items-center series mb-4">
                              <a href="javascript:void(0);">
                                <!-- <img src="images/trending/trending-label.png" class="img-fluid" alt=""> -->
                              </a>
                              <!-- <span class="text-gold ml-3">Nº 2 em Séries hoje</span> -->
                            </div>
                            <p class="trending-dec">
                            Uma crônica da vida da Rainha Elizabeth II dos anos 1940 aos tempos modernos. Com o passar das décadas, intrigas pessoais, romances e rivalidades políticas foram revelados e ajudaram a moldar o século XX.
                            </p>
                            <div class="p-btns">
                              <div class="d-flex align-items-center p-0">
                                <a href="inf_series.php?titulo=<?php echo urlencode('The Crown')?>" class="btn btn-hover mr-2" tabindex="0">
                                  <i class="fa fa-play mr-2"></i>
                                 Assistir agora
                                </a>
                                <!-- <a href="#" class="btn btn-link" tabindex="0">
                                  <i class="fa fa-plus pr-2"></i>
                                  Minha Lista
                                </a> -->
                              </div>
                            </div>
                            <div class="trending-list mt-4">
                                <!-- <div class="text-primary title">
                                  Estrelando:
                                  <span class="text-body">
                                    Clarie Foy, Olivia Colman, Imelda Staunton
                                  </span>
                                </div> -->
                              <div class="text-primary title">
                               Genêro:
                                <span class="text-body">
                                História
                                </span>
                              </div>
                              <div class="text-primary title">
                                Criador:
                                <span class="text-body">
                                  Peter Morgan
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="trending-data2" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">the Crown</h1>
                            <div class="d-flex align-items-center text-white text-detail mb-4">
                              <span class="season_date">
                                2 Temporadas
                              </span>
                              <span class="trending-year">Feb 2019</span>
                            </div>
                            <div class="iq-custom-select d-inline-block sea-epi">
                              <select name="Seasons" class="form-control season-select">
                                <option value="Season1">Temporada 1</option>
                                <option value="Season2">Temporada 2</option>
                                <option value="Season3">Temporada 3</option>
                                <option value="Season4">Temporada 4</option>
                                <option value="Season4">Temporada 4</option>
                                <option value="Season6">Temporada 6</option>
                              </select>
                            </div>

                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/trending/01.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/ce2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/ce3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/ce4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/ce5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>

                              </div>
                            </div>

                          </div>
                        </div>

                        <div id="trending-data3" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">the crown</h1>
                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/ce1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/ce2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/ce3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/ce4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/ce5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="trending-data4" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">the Crown</h1>
                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="tranding-block position-relative" style="background-image: url(https://wallpapercave.com/wp/wp2732715.jpg);">
                    <div class="trending-custom-tab">
                      <div class="tab-title-info position-relative">
                        <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                          <li class="nav-item">
                            <a href="#trending-data5" class="nav-link active show" data-toggle="pill" role="tab" aria-selected="true">
                              Visão geral
                            </a>
                          </li>
                          <!-- <li class="nav-item">
                            <a href="#trending-data6" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Episodes
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#trending-data7" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Trailers
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#trending-data8" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Semelhante a este
                            </a>
                          </li> -->
                        </ul>
                      </div>
                      <div class="trending-content">
                        <div id="trending-data5" class="overview-tab tab-pane fade active show">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="javascript:void(0);" tabindex="0">
                              <div class="res-logo">
                                <div class="channel-logo">
                                  <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                                </div>
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Suits</h1>
                            <div class="d-flex align-items-center text-white text-detail">
                              <span class="badge badge-secondary p-3">14+</span>
                              <span class="ml-3">9 Temporadas</span>
                              <span class="trending-year">2011</span>
                            </div>
                            <div class="d-flex align-items-center series mb-4">
                              <a href="javascript:void(0);">
                                <!-- <img src="images/trending/trending-label.png" class="img-fluid" alt=""> -->
                              </a>
                              <!-- <span class="text-gold ml-3"># 3 em Séries hoje</span> -->
                            </div>
                            <p class="trending-dec">
                              
Harvey Specter e sua equipe enfrentam uma disputa pelo poder quando um novo sócio chega à firma. Com a ausência de dois dos seus melhores associados e Jessica retornando a Chicago, eles tentam se adaptar à nova realidade. Ao longo do processo, surgem traições, relações intensas e segredos revelados, enquanto velhas e novas rivalidades se intensificam entre os membros da equipe.
                            </p>
                            <div class="p-btns">
                              <div class="d-flex align-items-center p-0">
                                <a href="inf_series.php?titulo=<?php echo urlencode('Suits')?>" class="btn btn-hover mr-2" tabindex="0">
                                  <i class="fa fa-play mr-2"></i>
                                  Assistir agora
                                </a>
                                <!-- <a href="#" class="btn btn-link" tabindex="0">
                                  <i class="fa fa-plus pr-2"></i>
                                 Minha Lista
                                </a> -->
                              </div>
                            </div>
                            <div class="trending-list mt-4">
                              <!-- <div class="text-primary title">
                                Estrelando:
                                <span class="text-body">
                                  Jhonny Galecki, Jim Parsons , Kaley Cuoco
                                </span>
                              </div> -->
                              <div class="text-primary title">
                                Gênero:
                                <span class="text-body">
                                  Drama
                                </span>
                              </div>
                              <div class="text-primary title">
                                Criador:
                                <span class="text-body">
                                  Aaron Korsh
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="trending-data6" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Big Bang Theory</h1>
                            <div class="d-flex align-items-center text-white text-detail mb-4">
                              <span class="season_date">
                                12 Temporadas
                              </span>
                              <span class="trending-year">Feb 2019</span>
                            </div>
                            <div class="iq-custom-select d-inline-block sea-epi">
                              <select name="Seasons" class="form-control season-select">
                                <option value="Season1">Temporada 1</option>
                                <option value="Season2">Temporada 2</option>
                                <option value="Season3">Temporada 3</option>
                                <option value="Season4">Temporada 4</option>
                                <option value="Season5">Temporada 5</option>
                                <option value="Season6">Temporada 6</option>
                                <option value="Season7">Temporada 7</option>
                                <option value="Season8">Temporada 8</option>
                                <option value="Season9">Temporada 9</option>
                                <option value="Season10">Temporada10</option>
                                <option value="Season11">Temporada 11</option>
                                <option value="Season12">Temporada 12</option>
                              </select>
                            </div>

                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>

                              </div>
                            </div>

                          </div>
                        </div>

                        <div id="trending-data7" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Big Bang Theory</h1>
                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="trending-data8" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Big Bang Theory</h1>
                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/ce3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="tranding-block position-relative" style="background-image: url(images/trending/03.jpg);">
                    <div class="trending-custom-tab">
                      <div class="tab-title-info position-relative">
                        <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                          <li class="nav-item">
                            <a href="#trending-data9" class="nav-link active show" data-toggle="pill" role="tab" aria-selected="true">
                              Visão geral
                            </a>
                          </li>
                          <!-- <li class="nav-item">
                            <a href="#trending-data10" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Episódios
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#trending-data11" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Trailers
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#trending-data12" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Semelhante a este
                            </a>
                          </li> -->
                        </ul>
                      </div>
                      <div class="trending-content">
                        <div id="trending-data9" class="overview-tab tab-pane fade active show">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="javascript:void(0);" tabindex="0">
                              <div class="res-logo">
                                <div class="channel-logo">
                                  <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                                </div>
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Peaky Blinders</h1>
                            <div class="d-flex align-items-center text-white text-detail">
                              <span class="badge badge-secondary p-3">16+</span>
                              <span class="ml-3">6 Temporadas</span>
                              <span class="trending-year">2013</span>
                            </div>
                            <div class="d-flex align-items-center series mb-4">
                              <a href="javascript:void(0);">
                                <!-- <img src="images/trending/trending-label.png" class="img-fluid" alt=""> -->
                              </a>
                              <!-- <span class="text-gold ml-3">#5 em Séries hoje</span> -->
                            </div>
                            <p class="trending-dec">
                            Uma notória gangue da Inglaterra de 1919 ascende no submundo liderada pelo cruel Tommy Shelby, um criminoso disposto a subir na vida a qualquer preço.
                            </p>
                            <div class="p-btns">
                              <div class="d-flex align-items-center p-0">
                                <a href="inf_series.php?titulo=<?php echo urlencode('Peaky Blinders')?>" class="btn btn-hover mr-2" tabindex="0">
                                  <i class="fa fa-play mr-2"></i>
                                 Assistir agora
                                </a>
                                <!-- <a href="#" class="btn btn-link" tabindex="0">
                                  <i class="fa fa-plus pr-2"></i>
                                  Minha Lista
                                </a> -->
                              </div>
                            </div>
                            <div class="trending-list mt-4">
                              <!-- <div class="text-primary title">
                                Estrelando:
                                <span class="text-body">
                                  Cillian Murphy, Paul Anderson, Helen McCrory
                                </span>
                              </div> -->
                              <div class="text-primary title">
                                Genero:
                                <span class="text-body">
                                  Drama, Mistério, Suspense
                                </span>
                              </div>
                              <div class="text-primary title">
                                Criador:
                                <span class="text-body">
                                  Steven Knight
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="trending-data10" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Peaky Blinders</h1>
                            <div class="d-flex align-items-center text-white text-detail mb-4">
                              <span class="season_date">
                                2 Temporadas
                              </span>
                              <span class="trending-year">Feb 2019</span>
                            </div>
                            <div class="iq-custom-select d-inline-block sea-epi">
                              <select name="Seasons" class="form-control season-select">
                                <option value="Season1">Temporada 1</option>
                                <option value="Season2">Temporada 2</option>
                                <option value="Season3">Temporada 3</option>
                                <option value="Season4">Temporada 4</option>
                                <option value="Season4">Temporada 4</option>
                                <option value="Season6">Temporada 6</option>
                              </select>
                            </div>

                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio  5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>

                              </div>
                            </div>

                          </div>
                        </div>

                        <div id="trending-data11" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Peaky Blinders</h1>
                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="trending-data12" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Peaky Blinders</h1>
                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="tranding-block position-relative" style="background-image: url(https://wallpapercat.com/w/full/1/3/f/2185211-1920x1080-desktop-full-hd-locke-and-key-tv-series-background-photo.jpg);">
                    <div class="trending-custom-tab">
                      <div class="tab-title-info position-relative">
                        <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                          <li class="nav-item">
                            <a href="#trending-data13" class="nav-link active show" data-toggle="pill" role="tab" aria-selected="true">
                              Visão geral
                            </a>
                          </li>
                          <!-- <li class="nav-item">
                            <a href="#trending-data14" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Episódios
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#trending-data15" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Trailers
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#trending-data16" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Semelhante a este
                            </a>
                          </li> -->
                        </ul>
                      </div>
                      <div class="trending-content">
                        <div id="trending-data13" class="overview-tab tab-pane fade active show">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="javascript:void(0);" tabindex="0">
                              <div class="res-logo">
                                <div class="channel-logo">
                                  <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                                </div>
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Locke e Key</h1>
                            <div class="d-flex align-items-center text-white text-detail">
                              <span class="badge badge-secondary p-3">14+</span>
                              <span class="ml-3">3 Temporadas</span>
                              <span class="trending-year">2020</span>
                            </div>
                            <div class="d-flex align-items-center series mb-4">
                              <a href="javascript:void(0);">
                                <!-- <img src="images/trending/trending-label.png" class="img-fluid" alt=""> -->
                              </a>
                              <!-- <span class="text-gold ml-3">#21 em Séries hoje</span> -->
                            </div>
                            <p class="trending-dec">
                            Após o assassinato do pai, três irmãos se mudam com a mãe para uma casa antiga onde descobrem chaves mágicas que revelam poderes e segredos.
                            </p>
                            <div class="p-btns">
                              <div class="d-flex align-items-center p-0">
                                <a href="inf_series.php?titulo=<?php echo urlencode('Locke e Key')?>" class="btn btn-hover mr-2" tabindex="0">
                                  <i class="fa fa-play mr-2"></i>
                                  Assistir agora
                                </a>
                                <!-- <a href="#" class="btn btn-link" tabindex="0">
                                  <i class="fa fa-plus pr-2"></i>
                                  Minha Lista
                                </a> -->
                              </div>
                            </div>
                            <div class="trending-list mt-4">
                              <!-- <div class="text-primary title">
                               Estrelando:
                                <span class="text-body">
                                  Pedro Pascal, Wagner Moura, Boyd Holbrook
                                </span>
                              </div> -->
                              <div class="text-primary title">
                                Gênero:
                                <span class="text-body">
                                  Terror
                                </span>
                              </div>
                              <div class="text-primary title">
                                Criador:
                                <span class="text-body">
                                  Joe Hill
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="trending-data14" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Locke e Key</h1>
                            <div class="d-flex align-items-center text-white text-detail mb-4">
                              <span class="season_date">
                                2 Temporadas
                              </span>
                              <span class="trending-year">Feb 2019</span>
                            </div>
                            <div class="iq-custom-select d-inline-block sea-epi">
                              <select name="Seasons" class="form-control season-select">
                                <option value="Season1">Temporada 1</option>
                                <option value="Season2">Temporada  2</option>
                                <option value="Season3">Temporada  3</option>
                                <option value="Season4">Temporada  4</option>
                                <option value="Season4">Temporada  4</option>
                                <option value="Season6">Temporada  6</option>
                              </select>
                            </div>

                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n2.png" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>

                              </div>
                            </div>

                          </div>
                        </div>

                        <div id="trending-data15" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Narcos</h1>
                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n2.png" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="trending-data16" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Narcos</h1>
                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="tranding-block position-relative" style="background-image: url(https://t2.tudocdn.net/628463?w=1920&h=1080);">
                    <div class="trending-custom-tab">
                      <div class="tab-title-info position-relative">
                        <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                          <li class="nav-item">
                            <a href="#trending-data17" class="nav-link active show" data-toggle="pill" role="tab" aria-selected="true">
                              Visão geral
                            </a>
                          </li>
                          <!-- <li class="nav-item">
                            <a href="#trending-data18" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Episódios
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#trending-data19" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Trailers
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#trending-data20" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Semelhante a este
                            </a>
                          </li> -->
                        </ul>
                      </div>
                      <div class="trending-content">
                        <div id="trending-data17" class="overview-tab tab-pane fade active show">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="javascript:void(0);" tabindex="0">
                              <div class="res-logo">
                                <div class="channel-logo">
                                  <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                                </div>
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">The Boys</h1>
                            <div class="d-flex align-items-center text-white text-detail">
                              <span class="badge badge-secondary p-3">18+</span>
                              <span class="ml-3">4 Temporadas</span>
                              <span class="trending-year">2019</span>
                            </div>
                            <div class="d-flex align-items-center series mb-4">
                              <a href="javascript:void(0);">
                                <!-- <img src="images/trending/trending-label.png" class="img-fluid" alt=""> -->
                              </a>
                              <!-- <span class="text-gold ml-3">#6 em Série hoje</span> -->
                            </div>
                            <p class="trending-dec">
                            A Terra é habitada por super-heróis que são um inspiração para a humanidade. Porém, esses protetores têm um lado sinistro que a maioria das pessoas desconhece. Se eles usam seus poderes para o mal, Hughie, Billy e o resto do time devem detê-los.
                            </p>
                            <div class="p-btns">
                              <div class="d-flex align-items-center p-0">
                                <a href="inf_series.php?titulo=<?php echo urlencode('The Boys') ?>" class="btn btn-hover mr-2" tabindex="0">
                                  <i class="fa fa-play mr-2"></i>
                                  Assistir agora
                                </a>
                                <!-- <a href="#" class="btn btn-link" tabindex="0">
                                  <i class="fa fa-plus pr-2"></i>
                                 Minha Lista
                                </a> -->
                              </div>
                            </div>
                            <div class="trending-list mt-4">
                              <!-- <div class="text-primary title">
                                Estrelando:
                                <span class="text-body">
                                  Jennifer Aniston, Courteney Cox, Lisa Kudrow
                                </span>
                              </div> -->
                              <div class="text-primary title">
                                Gênero:
                                <span class="text-body">
                                  Ação, Comédia, Drama, Ficção Científica
                                </span>
                              </div>
                              <div class="text-primary title">
                                Criadores:
                                <span class="text-body">
                                  Eric Kripke
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="trending-data18" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">FRIENDS</h1>
                            <div class="d-flex align-items-center text-white text-detail mb-4">
                              <span class="season_date">
                                10 Temporadas
                              </span>
                              <span class="trending-year">Feb 2019</span>
                            </div>
                            <div class="iq-custom-select d-inline-block sea-epi">
                              <select name="Seasons" class="form-control season-select">
                                <option value="Season1">Temporada 1</option>
                                <option value="Season2">Temporada 2</option>
                                <option value="Season3">Temporada 3</option>
                                <option value="Season4">Temporada 4</option>
                                <option value="Season4">Temporada 4</option>
                                <option value="Season6">Temporada 6</option>
                              </select>
                            </div>

                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>

                              </div>
                            </div>

                          </div>
                        </div>

                        <div id="trending-data19" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">The Boys</h1>
                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="trending-data20" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">FRIENDS</h1>
                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="tranding-block position-relative" style="background-image: url(https://cinebuzz.com.br/media/uploads/2024/09/round-6-ganha-poster-oficial-da-2a-temporada-e-data-do-teaser.jpg);">
                    <div class="trending-custom-tab">
                      <div class="tab-title-info position-relative">
                        <ul class="trending-pills d-flex nav nav-pills justify-content-center align-items-center text-center" role="tablist">
                          <li class="nav-item">
                            <a href="#trending-data21" class="nav-link active show" data-toggle="pill" role="tab" aria-selected="true">
                              Visão geral
                            </a>
                          </li>
                          <!-- <li class="nav-item">
                            <a href="#trending-data22" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Episódios
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#trending-data23" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Trailers
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#trending-data24" class="nav-link" data-toggle="pill" role="tab" aria-selected="false">
                              Semelhante a este
                            </a>
                          </li> -->
                        </ul>
                      </div>
                      <div class="trending-content">
                        <div id="trending-data21" class="overview-tab tab-pane fade active show">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="javascript:void(0);" tabindex="0">
                              <div class="res-logo">
                                <div class="channel-logo">
                                  <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                                </div>
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Round 6</h1>
                            <div class="d-flex align-items-center text-white text-detail">
                              <span class="badge badge-secondary p-3">16+</span>
                              <span class="ml-3">1 Temporada</span>
                              <span class="trending-year">2021</span>
                            </div>
                            <div class="d-flex align-items-center series mb-4">
                              <a href="javascript:void(0);">
                                <!-- <img src="images/trending/trending-label.png" class="img-fluid" alt=""> -->
                              </a>
                              <!-- <span class="text-gold ml-3">#11 em Série hoje</span> -->
                            </div>
                            <p class="trending-dec">

                            Um grupo de pessoas passando por dificuldades financeiras aceita um estranho convite para um jogo de sobrevivência. Um prêmio bilionário os aguarda, mas as apostas são altas e mortais.
                            </p>
                            <div class="p-btns">
                              <div class="d-flex align-items-center p-0">
                                <a href="inf_series.php?titulo=<?php echo urlencode('Round 6')?>" class="btn btn-hover mr-2" tabindex="0">
                                  <i class="fa fa-play mr-2"></i>
                                  Assistir agora
                                </a>
                                <!-- <a href="#" class="btn btn-link" tabindex="0">
                                  <i class="fa fa-plus pr-2"></i>
                                  Minha Lista
                                </a> -->
                              </div>
                            </div>
                            <div class="trending-list mt-4">
                              <!-- <div class="text-primary title">
                                Estrelando:
                                <span class="text-body">
                                  Pankaj Tripathi, Ali Fazal, Divyendu Sharma
                                </span>
                              </div> -->
                              <div class="text-primary title">
                                Gênero:
                                <span class="text-body">
                                  Suspense
                                </span>
                              </div>
                              <div class="text-primary title">
                                Criador:
                                <span class="text-body">
                                  Hwang Dong-hyuk
                                </span>
                              </div> 
                            </div>
                          </div>
                        </div>

                        <div id="trending-data22" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Mirzapur</h1>
                            <div class="d-flex align-items-center text-white text-detail mb-4">
                              <span class="season_date">
                                2 Temporadas
                              </span>
                              <span class="trending-year">Feb 2019</span>
                            </div>
                            <div class="iq-custom-select d-inline-block sea-epi">
                              <select name="Seasons" class="form-control season-select">
                                <option value="Season1">Temporada 1</option>
                                <option value="Season2">Temporada 2</option>
                              </select>
                            </div>

                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Episódio 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>

                              </div>
                            </div>

                          </div>
                        </div>

                        <div id="trending-data23" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Mirzapur</h1>
                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m1.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="trending-data24" class="overlay-tab tab-pane fade">
                          <div class="trending-info align-items-center w-100 animated fadeInUp">
                            <a href="#" tabindex="0">
                              <div class="channel-logo">
                                <img src="assets/images/bahviologo.png" class="c-logo" alt="">
                              </div>
                            </a>
                            <h1 class="trending-text big-title text-uppercase">Mirzapur</h1>
                            <div class="episodes-contens mt-4">
                              <div class="owl-carousel owl-theme episodes-slider1 list-inline p-0 m-0">
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/bbt3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 1</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/fe2.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 2</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/m4.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 3</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/pb3.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 4</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                                <div class="e-item">
                                  <div class="block-image position-relative">
                                    <a href="#">
                                      <img src="images/episodes/n5.jpg" class="img-fluid" alt="">
                                    </a>
                                    <div class="episode-play-info">
                                      <div class="episode-play">
                                        <a href="#" tabindex="0">
                                          <i class="fa fa-play"></i>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="episodes-description text-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                      <a href="#">Trailer 5</a>
                                      <span class="text-primary">2.25m</span>
                                    </div>
                                    <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque aliquam quisquam iure tempore earum sequi.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php
// Consulta SQL para obter os 5 filmes ou séries mais bem avaliados
$sql = "
    SELECT id, titulo, imagem_url AS imagem, idade, duracao, NULL AS total_temporadas, 
           (SELECT AVG(estrelas) FROM avaliacoes WHERE filmes.id = avaliacoes.filme_id) AS media_avaliacao
    FROM filmes
    UNION ALL
    SELECT s.id, s.titulo, s.imagem_url AS imagem, s.idade, NULL AS duracao, 
           (SELECT COUNT(DISTINCT temporada) FROM episodios WHERE episodios.serie_id = s.id) AS total_temporadas,
           (SELECT AVG(estrelas) FROM avaliacoes WHERE s.id = avaliacoes.serie_id) AS media_avaliacao
    FROM series AS s
    ORDER BY media_avaliacao DESC
    LIMIT 5
";

// Executando a consulta diretamente
$result = $conn->query($sql);

// Verificando se há resultados
if ($result->num_rows > 0) {
  echo '<section id="iq-suggested" class="s-margin">';
  echo '<div class="container-fluid">';
  echo '<div class="row">';
  echo '<div class="col-sm-12 overflow-hidden">';
  echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
  echo '<h4 class="main-title">Mais Bem Avaliados</h4>';
  // echo '<a href="#" class="iq-view-all">Ver tudo</a>';
  echo '</div>';
  echo '<div class="favorite-contens">';
  echo '<ul class="favorites-slider list-inline row p-0 mb-0">';

    while ($row = $result->fetch_assoc()) {
        echo '<li class="slide-item">';
        echo '<div class="block-images position-relative">';
        echo '<div class="img-box">';
        echo '<img src="' . $row['imagem'] . '" class="img-fluid" alt="Imagem do item" />';
        echo '</div>';
        echo '<div class="block-description">';
        echo '<h6 class="iq-title">';
        $link = $row['duracao'] !== NULL ? 'inf_filmes.php' : 'inf_series.php';
        echo '<a href="' . $link . '?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
        echo '</h6>';
        echo '<div class="movie-time d-flex align-items-center my-2">';
        echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
        if ($row['duracao'] !== NULL) {
            echo '<span class="text-white">' . $row['duracao'] . '</span>';
        } else {
            echo '<span class="text-white">' . $row['total_temporadas'] . ' temporadas</span>';
        }
        echo '</div>';
        echo '<div class="hover-buttons">';
        echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'' . $link . '?titulo=' . urlencode($row['titulo']) . '\'">';
        echo '<i class="fa fa-play mr-1"></i>';
        echo 'Assistir agora';
        echo '</span>';
        echo '</div>';
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
    echo '<p>Nenhum item encontrado.</p>';
}
?>


    <?php
$sql = "
    SELECT id, titulo, imagem_url AS imagem, idade, duracao, NULL AS temporada
    FROM filmes
    WHERE idade = 'L'
    UNION ALL
    SELECT id, titulo, imagem_url AS imagem, idade, NULL AS duracao, temporada
    FROM series
    WHERE idade = 'L'
";

// Preparando a consulta
$stmt = $conn->prepare($sql);

// Executando a consulta
$stmt->execute();
$result = $stmt->get_result();

// Verificando se há resultados
if ($result->num_rows > 0) {
    echo '<section id="iq-upcoming-movie">';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    echo '<div class="col-sm-12 overflow-hidden">';
    echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
    echo '<h4 class="main-title">Assistir em Família</h4>';
    // echo '<a href="#" class="iq-view-all">Ver tudo</a>';
    echo '</div>';
    echo '<div class="favorite-contens">';
    echo '<ul class="favorites-slider list-inline row p-0 mb-0">';

    // Exibe cada item favorito
    while ($row = $result->fetch_assoc()) {
        // Exibe informações da série
        if ($row['temporada'] !== NULL) {
            echo '<li class="slide-item">';
            echo '<div class="block-images position-relative">';
            echo '<div class="img-box">';
            echo '<img src="' . $row['imagem'] . '" class="img-fluid" alt="Imagem da série" />';
            echo '</div>';
            echo '<div class="block-description">';
            echo '<h6 class="iq-title">';
            echo '<a href="inf_series.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
            echo '</h6>';
            echo '<div class="movie-time d-flex align-items-center my-2">';
            echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
            echo '<span class="text-white">' . $row['temporada'] . ' temporadas</span>';
            echo '</div>';
            echo '<div class="hover-buttons">';
            echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'inf_series.php?titulo=' . urlencode($row['titulo']) . '\'">';
            echo '<i class="fa fa-play mr-1"></i>';
            echo 'Assistir agora';
            echo '</span>';
            echo '</div>';
            echo '</div>';
            echo '<div class="block-social-info">';
            echo '<ul class="list-inline p-0 m-0 music-play-lists">';
            
            $favoritado = false; 


            echo '<li class="fav" data-titulo="' . $row['titulo'] . '">';
            echo '<span>';
            echo '<i class="fa ' . ($favoritado ? 'fa-heart' : 'fa-plus') . '"></i>';
            echo '</span>';
            echo '</li>';

            echo '<li class="share"><span><i class="fa fa-share-alt"></i></span></li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
            echo '</li>';
        }

        // Exibe informações do filme
        elseif ($row['duracao'] !== NULL) {
            echo '<li class="slide-item">';
            echo '<div class="block-images position-relative">';
            echo '<div class="img-box">';
            echo '<img src="' . $row['imagem'] . '" class="img-fluid" alt="Imagem do filme" />';
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
    }

    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
}
?>




  </div>

  <!-- main content ends  -->
  <?php include_once('includes/footer.php'); ?>

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