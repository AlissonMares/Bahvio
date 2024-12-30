<?php include 'includes/logo-page.php';?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="assets/css/categoria.css">
  <link rel="stylesheet" href="assets/css/style.css" />
    <title>Filtro de Filmes e Séries</title>
</head>
<body>

<?php include_once ('includes/header.php');?>



<div class="header"></div>

    <div class="container-filtrer">
        <div class="sidebar">
            <h2>Filtros</h2>
            <form id="filterForm">
                <h3>Tipo</h3>
                <select id="select" onchange="verificaTipo()">
                    <option value="">Selecionar Tipo</option>
                    <option value="filme">Filme</option>
                    <option value="serie">Série</option>
                </select>
                <h3>Gênero</h3>
                <div id="generosContainer">
                    <label><input type="checkbox" value="1"> Ação</label>
                    <label><input type="checkbox" value="2"> Comédia</label>
                    <label><input type="checkbox" value="6"> Drama</label>
                    <label><input type="checkbox" value="4"> Fantasia</label>
                    <label><input type="checkbox" value="5"> Ficção Científica</label>
                    <label><input type="checkbox" value="3"> Aventura</label>
                    <label><input type="checkbox" value="7"> Romance</label>
                    <label><input type="checkbox" value="8"> Suspense</label>
                    <label><input type="checkbox" value="9"> Terror</label>
                    <label><input type="checkbox" value="10"> Mistério</label>
                    <label><input type="checkbox" value="11"> Animação</label>
                    <label><input type="checkbox" value="12"> Musical</label>
                </div>
                <button id="filtrarBtn" type="submit">Filtrar</button>
            </form>
        </div>
        <div id="moviesList" class="movies-list">
            <h2>Filmes e Séries</h2>
        </div>
    </div>
    <script src="assets/js/categoria.js"></script>
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
