<?php
include 'includes/logo-page.php'; 
include 'conexao/connect.php'; 
include ('funcoes_avaliacoes.php');
session_start();

$titulo = isset($_GET['titulo']) ? trim($_GET['titulo']) : '';
$usuario_id = isset($_SESSION['id']) ? $_SESSION['id'] : null;

if (empty($titulo)) {
    echo "Erro: Nome do filme não encontrado.";
    exit;
}

if (!$usuario_id) {
    echo 'Erro: Usuário não encontrado.';
    exit;
}


$sql = "SELECT f.id, f.titulo, f.ano, f.duracao, f.descricao, f.idade, f.imagem_url, 
            GROUP_CONCAT(DISTINCT c.nome SEPARATOR ', ') AS generos, 
            COALESCE(AVG(a.estrelas), 0) AS media_avaliacao
        FROM filmes f
        JOIN filme_categoria fc ON f.id = fc.filme_id
        JOIN categorias c ON fc.categoria_id = c.id
        LEFT JOIN avaliacoes a ON f.id = a.filme_id
        WHERE f.titulo = ?
        GROUP BY f.id";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $titulo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $filme_id = $row['id'];
    $titulo = $row['titulo'];
    $idade = $row['idade'];
    $ano = $row['ano'];
    $duracao = $row['duracao'];
    $descricao = $row['descricao'];
    $generos = $row['generos'];
    $imagem_url = $row['imagem_url'];
    $media_avaliacao1 = round($row['media_avaliacao'], 1); 
} else {
    echo "Filme não encontrado.";
    exit;
}


$sql_fav_check = "SELECT id FROM favoritos WHERE usuario_id = ? AND filme_id = (SELECT id FROM filmes WHERE titulo = ?)";
$stmt_check = $conn->prepare($sql_fav_check);
$stmt_check->bind_param("is", $usuario_id, $titulo);
$stmt_check->execute();
$stmt_check->store_result();
$favoritado = $stmt_check->num_rows > 0; 


if (isset($_GET['favoritar']) && $_GET['favoritar'] == 'true') {
    if ($favoritado) {

        $sql_remove_fav = "DELETE FROM favoritos WHERE usuario_id = ? AND filme_id = (SELECT id FROM filmes WHERE titulo = ?)";
        $stmt_remove_fav = $conn->prepare($sql_remove_fav);
        $stmt_remove_fav->bind_param("is", $usuario_id, $titulo);
        $stmt_remove_fav->execute();
    } else {

        $sql_favorito = "INSERT INTO favoritos (usuario_id, filme_id) 
                         SELECT ?, id FROM filmes WHERE titulo = ?";
        $stmt_favorito = $conn->prepare($sql_favorito);
        $stmt_favorito->bind_param("is", $usuario_id, $titulo);
        $stmt_favorito->execute();
    }
    $favoritado = !$favoritado;
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/filmes.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title><?php echo htmlspecialchars($titulo); ?></title>
</head>

<body>

    <div class="header-logo"><img src="assets/images/bahviologo.png" alt="logo"></div>

    <div class="header">
        <div class="back">
            <i class="fa-solid fa-arrow-left" onclick="history.back()"></i>
        </div>

        <div class="image-container">
            <img src="<?php echo $imagem_url ?>">
            <button class="watch-btn"><i class="fa-solid fa-circle-play"
                    onclick="window.location.href='assistir.php?titulo=<?php echo urlencode($titulo); ?>'"></i></button>
        </div>
    </div>

    <div class="container-tittle">
        <div class="movie-title"><?php echo htmlspecialchars($titulo); ?></div>
        <div class="movie-info">
            <div class="movie-age 
                <?php
                if ($idade === 'L' ) {
                    echo 'age-livre';
                } elseif ($idade >= 12 && $idade < 13) {
                    echo 'age-12';
                } elseif ($idade >= 14 && $idade < 15) {
                    echo 'age-14';
                } elseif ($idade >= 16 && $idade < 17) {
                    echo 'age-16';  
                } elseif ($idade >= 18) {
                    echo 'age-18';
                } 
                ?>">
                <?php echo htmlspecialchars($idade); ?>
            </div>
            <div class="movie-meta">
                <span><?php echo htmlspecialchars($duracao); ?></span>
            </div>
        </div>

        <div class="movie-description">
            <?php echo nl2br(htmlspecialchars($descricao)); ?>
        </div>

        <div class="year">
            <span>Ano: <?php echo htmlspecialchars($ano); ?></span>
        </div>

        <div class="movie-genres">
            Gênero: <?php echo htmlspecialchars($generos); ?>
        </div>
                
        <div class="average-rating">
            <ul>
            <h4>IMDb:</h4>
                <?php 
                    $media_avaliacao = calcularMediaAvaliacao($conn, $filme_id);
                    echo gerarEstrelas($media_avaliacao);
                ?>
            </ul>
        </div>

        <?php if (isset($favorito_msg)) { echo "<p>$favorito_msg</p>"; } ?>
        <p>Gostou do que assistiu?</p>
        <div class="icons-container">
            <ul class="avaliacao">
                <li class="star-icon" data-avaliacao="1"></li>
                <li class="star-icon" data-avaliacao="2"></li>
                <li class="star-icon" data-avaliacao="3"></li>
                <li class="star-icon" data-avaliacao="4"></li>
                <li class="star-icon" data-avaliacao="5"></li>
            </ul>
            <div class="fav">
                <a href="?titulo=<?php echo urlencode($titulo); ?>&favoritar=true">
                    <i class="fa-solid fa-heart <?php echo $favoritado ? 'favoritado' : ''; ?>"></i>
                </a>
            </div>



            <script>
                // Animação
                document.addEventListener("DOMContentLoaded", function () {
                document.body.style.opacity = "1"; 
                });
                document.querySelector('.fav a').addEventListener('click', function(e) {
                e.preventDefault(); // Impede a navegação e recarregamento da página

                // Solicita para o servidor favoritar ou desfavoritar o filme
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "?titulo=<?php echo urlencode($titulo); ?>&favoritar=true", true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        console.log("Filme atualizado nos favoritos");

                        // Mudar o ícone do botão dependendo do status
                        var icon = document.querySelector('.fav i');
                        icon.classList.toggle('favoritado'); // Troca o ícone para 'favoritado' ou 'não favoritado'
                    }
                };
                xhr.send();
            });

            </script>


            <script>
            var stars = document.querySelectorAll('.star-icon');
            stars.forEach(function(star) {
                star.addEventListener('click', function(e) {
                    var avaliacao = e.target.getAttribute('data-avaliacao');
                    stars.forEach(function(s) {
                        s.classList.remove('ativo');
                    });
                    e.target.classList.add('ativo');

                    // Envia avaliação para o PHP usando AJAX
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "salvar_avaliacao.php", true);
                    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function() {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            console.log("Avaliação salva: " + avaliacao); // Teste
                        }
                    };
                    xhr.send("titulo=<?php echo urlencode($titulo); ?>&estrelas=" + avaliacao);
                });
            });
            </script>
        </div>
    </div>
</body>

</html>