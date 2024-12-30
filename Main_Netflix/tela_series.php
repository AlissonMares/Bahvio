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
      <section id="home" class="iq-main-slider p-0">
    <div id="home-slider" class="slider m-0 p-0">
      <div class="slide slick-bg s-bg-4">
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
                  HALO
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                        <?php
                        $serie_id = 21; 
                        $media_avaliacao = calcularMediaAvaliacao($conn, null, $serie_id);
                        echo gerarEstrelas($media_avaliacao);
                        ?>
                    </ul>
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2">16+</span>
                    <span class="ml-3">2 temporadas</span>
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                Um grupo de pessoas passando por dificuldades financeiras aceita um estranho convite para um jogo de sobrevivência. Um prêmio bilionário os aguarda, mas as apostas são altas e mortais.
                </p>
                <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <div class="text-primary title genres">Gênero:
                    <span class="text-body">Ficção Científica</span>
                  </div>
                  <div class="text-primary title tag">
                    Etiquetas:
                    <span class="text-body">Ação, Aventura, Ficção Científica, Suspense</span>
                  </div>
                </div>
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="inf_series.php?titulo=<?php echo urldecode('HALO')?>" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Assistir agora</a>
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
      <div class="slide slick-bg s-bg-5">
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
                  Round 6
                </h1>
                <div class="d-flex flex-wrap align-items-center fadeInLeft animated" data-animation-in="fadeInLeft"
                  style="opacity: 1">
                  <div class="slider-ratting d-flex align-items-center mr-4 mt-2 mt-md-3">
                    <ul class="ratting-start p-0 m-0 list-inline text-primary d-flex align-items-center justify-content-left">
                        <?php
                        $serie_id = 26; 
                        $media_avaliacao = calcularMediaAvaliacao($conn, null, $serie_id);
                        echo gerarEstrelas($media_avaliacao);
                        ?>
                    </ul>
                  </div>
                  <div class="d-flex align-items-center mt-2 mt-md-3">
                    <span class="badge badge-secondary p-2">18+</span>
                    <span class="ml-3">1 temporada</span>
                  </div>
                </div>
                <p data-animation-in="fadeInUp">
                Um grupo de pessoas passando por dificuldades financeiras aceita um estranho convite para um jogo de sobrevivência. Um prêmio bilionário os aguarda, mas as apostas são altas e mortais.
                </p>
                <div class="trending-list" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <div class="text-primary title genres">
                    Genêro: <span class="text-body">Suspense</span>
                  </div>
                  <div class="text-primary title tag">
                    Etiquetas:
                    <span class="text-body">Suspense</span>
                  </div>
                </div>
                <div class="d-flex align-items-center r-mb-23 mt-4" data-animation-in="fadeInUp" data-delay-in="1.2">
                  <a href="inf_series.php?titulo=<?php echo urlencode('Round 6') ?>" class="btn btn-hover iq-button"><i class="fa fa-play mr-3"></i>Assistir agora</a>
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



    <div class="main-content">

    <?php
// Consulta SQL para obter os 5 filmes ou séries mais bem avaliados
$sql = "
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
        echo '<a href="inf_series.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
        echo '</h6>';
        echo '<div class="movie-time d-flex align-items-center my-2">';
        echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
        echo '<span class="text-white">' . $row['total_temporadas'] . ' temporadas</span>';
        echo '</div>';
        echo '<div class="hover-buttons">';
        echo '<span class="btn btn-hover iq-button" onclick="window.location.href=\'inf_series.php?titulo=' . urlencode($row['titulo']) . '\'">';
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
   
    
        <!-- upcoming contents section starts  -->
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

    
        <?php
       $sql = "
       SELECT s.titulo, s.ano, s.idade, s.imagem_url, COUNT(DISTINCT ep.temporada) AS total_temporadas
       FROM series s
       INNER JOIN serie_categoria sc ON s.id = sc.serie_id
       INNER JOIN episodios ep ON ep.serie_id = s.id
       WHERE sc.categoria_id = 11
       GROUP BY s.id";
   
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
       echo '<section id="iq-suggested" class="s-margin">';
       echo '<div class="container-fluid">';
       echo '<div class="row">';
       echo '<div class="col-sm-12 overflow-hidden">';
       echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
       echo '<h4 class="main-title">Animação</h4>';
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
           echo '<a href="inf_series.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
           echo '</h6>';
           echo '<div class="movie-time d-flex align-items-center my-2">';
           echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
           echo '<span class="text-white">' . $row['total_temporadas'] . " Temporada(s)</span>";  // Exibe o número de temporadas
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
   }
   
      ?>

        
       
        
<?php
$sql = "
SELECT s.id, s.titulo, s.ano, s.idade, s.imagem_url
FROM series s
INNER JOIN serie_categoria sc ON s.id = sc.serie_id
WHERE sc.categoria_id = 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<section id="iq-upcoming-movie">';
  echo '<div class="container-fluid">';
  echo '<div class="row">';
  echo '<div class="col-sm-12 overflow-hidden">';
  echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
  echo '<h4 class="main-title">Ação</h4>';
  //echo '<a href="#" class="iq-view-all">Ver tudo</a>';
  echo '</div>';
  echo '<div class="favorite-contens">';
  echo '<ul class="favorites-slider list-inline row p-0 mb-0">';

    while ($row = $result->fetch_assoc()) {
        // Consulta para contar as temporadas de cada série
        $temporadaQuery = "SELECT COUNT(DISTINCT temporada) AS temporada FROM episodios WHERE serie_id = '" . $row["id"] . "';";
        $temporadaResult = $conn->query($temporadaQuery);
        $temporadaData = $temporadaResult->fetch_assoc();
        $totalTemporadas = $temporadaData['temporada'];

        echo '<li class="slide-item">';
        echo '<div class="block-images position-relative">';
        echo '<div class="img-box">';
        echo '<img src="' . $row['imagem_url'] . '" class="img-fluid" alt="" />';
        echo '</div>';
        echo '<div class="block-description">';
        echo '<h6 class="iq-title">';
        echo '<a href="inf_series.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
        echo '</h6>';
        echo '<div class="movie-time d-flex align-items-center my-2">';
        echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
        echo '<span class="text-white">' . $totalTemporadas . " Temporada(s)</span>";  // Exibe o número de temporadas
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
}
?>



<?php
        $sql = "
        SELECT s.titulo, s.ano, s.idade, s.temporada, s.imagem_url
        FROM series s
        INNER JOIN serie_categoria sc ON s.id = sc.serie_id
        WHERE sc.categoria_id = 8 ";
        
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          echo '<section id="iq-upcoming-movie">';
          echo '<div class="container-fluid">';
          echo '<div class="row">';
          echo '<div class="col-sm-12 overflow-hidden">';
          echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
          echo '<h4 class="main-title">Suspense</h4>';
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
              echo '<a href="inf_series.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
              echo '</h6>';
              echo '<div class="movie-time d-flex align-items-center my-2">';
              echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
              echo '<span class="text-white">' . $totalTemporadas . " Temporada(s)</span>";  // Exibe o número de temporadas
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
      } 
      ?>


<?php
        $sql = "
        SELECT s.titulo, s.ano, s.idade, s.temporada, s.imagem_url
        FROM series s
        INNER JOIN serie_categoria sc ON s.id = sc.serie_id
        WHERE sc.categoria_id = 5 ";
        
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          echo '<section id="iq-upcoming-movie">';
          echo '<div class="container-fluid">';
          echo '<div class="row">';
          echo '<div class="col-sm-12 overflow-hidden">';
          echo '<div class="iq-main-header d-flex align-items-center justify-content-between">';
          echo '<h4 class="main-title">Ficção Cientifíca</h4>';
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
              echo '<a href="inf_series.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
              echo '</h6>';
              echo '<div class="movie-time d-flex align-items-center my-2">';
              echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
              echo '<span class="text-white">' . $totalTemporadas . " Temporada(s)</span>";  // Exibe o número de temporadas
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
      } 
      ?>

<?php
        $sql = "
        SELECT s.titulo, s.ano, s.idade, s.temporada, s.imagem_url
        FROM series s
        INNER JOIN serie_categoria sc ON s.id = sc.serie_id
        WHERE sc.categoria_id = 4 ";
        
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
              echo '<a href="inf_series.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
              echo '</h6>';
              echo '<div class="movie-time d-flex align-items-center my-2">';
              echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
              echo '<span class="text-white">' . $totalTemporadas . " Temporada(s)</span>";  // Exibe o número de temporadas
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
      } 
      ?>


<?php
        $sql = "
        SELECT s.titulo, s.ano, s.idade, s.temporada, s.imagem_url
        FROM series s
        INNER JOIN serie_categoria sc ON s.id = sc.serie_id
        WHERE sc.categoria_id = 10 ";
        
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
              echo '<a href="inf_series.php?titulo=' . urlencode($row['titulo']) . '">' . $row['titulo'] . '</a>';
              echo '</h6>';
              echo '<div class="movie-time d-flex align-items-center my-2">';
              echo '<div class="badge badge-secondary p-1 mr-2">' . $row['idade'] . '</div>';
              echo '<span class="text-white">' . $totalTemporadas . " Temporada(s)</span>";  // Exibe o número de temporadas  // Exibe o número de temporadas
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
      } 
      ?>

        <?php include_once('includes/footer.php'); ?>

    </div>
    <!-- js files  -->
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