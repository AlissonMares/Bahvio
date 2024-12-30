<?php include 'includes/logo-page.php'; 
?>
<?php session_start(); ?>
<?php
include 'conexao/connect.php';
include ('funcoes_avaliacoes.php');

$titulo = isset($_GET['titulo']) ? trim($_GET['titulo']) : '';
$usuario_id = isset($_SESSION['id']) ? $_SESSION['id'] : null;
$sql_series = "SELECT * FROM series";
$result_series = $conn->query($sql_series);

if (!empty($titulo)) {
    $sql = "SELECT s.id, s.titulo, s.descricao, s.idade, s.temporada, s.imagem_url, 
    GROUP_CONCAT(DISTINCT c.nome SEPARATOR ', ') AS generos, 
    COALESCE(AVG(a.estrelas), 0) AS media_avaliacao
FROM series s
JOIN serie_categoria sc ON s.id = sc.serie_id
JOIN categorias c ON sc.categoria_id = c.id
LEFT JOIN avaliacoes a ON s.id = a.serie_id
WHERE s.titulo = ?
GROUP BY s.id";



    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $titulo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $s_id = $row['id'];
        $titulo = $row['titulo'];
        $idade = $row['idade'];
        $descricao = $row['descricao'];
        $temporada = $row['temporada'];
        $imagem_url = $row['imagem_url'];
        $generos = $row['generos'];
        $media_avaliacao = round($row['media_avaliacao'], 1); 

    } else {
        echo "Série não encontrada.";
        exit;
    }

    // Busca as temporadas e episódios da série
    $sqlTemporadas = "SELECT DISTINCT temporada FROM episodios WHERE serie_id = (SELECT id FROM series WHERE titulo = ?) ORDER BY temporada";
    $stmtTemporadas = $conn->prepare($sqlTemporadas);
    $stmtTemporadas->bind_param("s", $titulo);
    $stmtTemporadas->execute();
    $resultTemporadas = $stmtTemporadas->get_result();

    $temporadas = [];
    while ($temp = $resultTemporadas->fetch_assoc()) {
        $temporadas[] = $temp['temporada'];
    }

} else {
    echo "Erro: Nome da série não encontrado.";
    exit;
}

$sql_fav_check = "SELECT id FROM favoritos WHERE usuario_id = ? AND serie_id = (SELECT id FROM series WHERE titulo = ?)";
$stmt_check = $conn->prepare($sql_fav_check);
$stmt_check->bind_param("is", $usuario_id, $titulo);
$stmt_check->execute();
$stmt_check->store_result();
$favoritado = $stmt_check->num_rows > 0; 


if (isset($_GET['favoritar']) && $_GET['favoritar'] == 'true') {
    if ($favoritado) {

        $sql_remove_fav = "DELETE FROM favoritos WHERE usuario_id = ? AND serie_id = (SELECT id FROM series WHERE titulo = ?)";
        $stmt_remove_fav = $conn->prepare($sql_remove_fav);
        $stmt_remove_fav->bind_param("is", $usuario_id, $titulo);
        $stmt_remove_fav->execute();
    } else {

        $sql_favorito = "INSERT INTO favoritos (usuario_id, serie_id) 
                         SELECT ?, id FROM series WHERE titulo = ?";
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
    <link rel="stylesheet" href="assets/css/series1.css">
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
            <img src="<?php echo $imagem_url ?>" alt="<?php echo htmlspecialchars($titulo); ?>">
        </div>
    </div>

    <div class="container-tittle">
        <div class="series-title"><?php echo htmlspecialchars($titulo); ?></div>
        <div class="series-info">
            <div class="series-age 
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
        </div>
        <div class="movie-meta">
            <?php  echo "<td>" . $conn->query(query: "SELECT COUNT(DISTINCT temporada) as temporada FROM episodios WHERE serie_id = '" . $s_id . "'
                ORDER BY temporada;")->fetch_object()->temporada . " temporada(s)</td>"; ?>
        </div>

        <div class="series-description">
            <?php echo nl2br(htmlspecialchars($descricao)); ?>
        </div>

        <div class="series-genres">
            Gênero: <?php echo htmlspecialchars($generos); ?>
        </div>

        <div class="average-rating">
            <ul>
                <h4>IMDb:</h4>
                <?php 
                    $media_avaliacao = calcularMediaAvaliacao($conn, null, $s_id);
                    echo gerarEstrelas($media_avaliacao);
                ?>
            </ul>
        </div>

        <div class="temporadas-container">
            <h3>Temporadas:</h3>
            <select id="temporada-select" onchange="loadEpisodios()">
                <?php foreach ($temporadas as $temporada): ?>
                <option value="<?php echo $temporada; ?>" <?php echo ($temporada == 1) ? 'selected' : ''; ?>>
                    Temporada <?php echo $temporada; ?>
                </option>

                <?php endforeach; ?>
            </select>

            <h5>Gostou do que assistiu?</h5>
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
                        xhr.send("titulo=<?php echo urlencode($titulo); ?>&estrelas=" + avaliacao +
                            "&usuario_id=<?php echo $_SESSION['id']; ?>");
                    });
                });
                </script>

            </div>
            <p id="episodios-title">
                Episódios:
            </p>

            <div id="episodios-container" style="display: none;">
                <ul id="episodios-list"></ul>
            </div>
        </div>



        <script>
        function loadEpisodios() {
            var temporada = document.getElementById('temporada-select').value;
            var episodiosContainer = document.getElementById('episodios-container');
            var episodiosList = document.getElementById('episodios-list');

            if (!temporada) {
                episodiosContainer.style.display = 'none';
                return;
            }

            episodiosContainer.style.display = 'block';

            episodiosList.innerHTML = '';

            var xhr = new XMLHttpRequest();
            xhr.open("GET", "buscar_episodios.php?titulo=<?php echo urlencode($titulo); ?>&temporada=" + temporada,
                true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var episodios = JSON.parse(xhr.responseText);

                    if (episodios.length > 0) {
                        episodios.forEach(function(ep) {
                            var li = document.createElement('li');
                            li.classList.add('episodio-item');

                            // Número do episódio
                            var numero = document.createElement('span');
                            numero.classList.add('episodio-numero');
                            numero.innerHTML = '' + ep.numero_episodio;
                            li.appendChild(numero);

                            // Imagem do episódio com botão de play
                            var imgContainer = document.createElement('div');
                            imgContainer.classList.add('episodio-img-container');

                            var img = document.createElement('img');
                            img.src = '<?php echo $imagem_url; ?>';
                            img.alt = 'Capa do episódio';
                            img.classList.add('episodio-img');
                            li.appendChild(img);
                            imgContainer.appendChild(img);

                            var playButton = document.createElement('i');
                            playButton.classList.add('fa', 'fa-play', 'episodio-play-button');
                            playButton.onclick = function() {
                                console.log("ID Episódio:", ep.id);
                                window.location.href = 'assistir.php?titulo=' + encodeURIComponent(ep
                                    .titulo) + '&tipo=serie' + '&id=' + encodeURIComponent(ep.id);

                            };
                            imgContainer.appendChild(playButton);

                            li.appendChild(imgContainer);

                            // Descrição do episódio
                            var itemDescContainer = document.createElement('div');
                            itemDescContainer.classList.add('episodio-desc-container');

                            // Título do episódio
                            var titulo = document.createElement('h4');
                            titulo.innerHTML = ep.titulo;
                            titulo.classList.add('episodio-titulo');
                            itemDescContainer.appendChild(titulo);

                            // Descrição do episódio
                            var descricao = document.createElement('p');
                            descricao.innerHTML = ep.descricao;
                            descricao.classList.add('episodio-descricao');
                            itemDescContainer.appendChild(descricao);

                            // Duração do episódio
                            var duracao = document.createElement('div');
                            duracao.innerHTML = ep.duracao;
                            duracao.classList.add('episodio-duracao');
                            itemDescContainer.appendChild(duracao);

                            li.appendChild(itemDescContainer);

                            episodiosList.appendChild(li);
                        });
                    } else {
                        episodiosList.innerHTML = '<li>Não há episódios nesta temporada.</li>';
                    }
                }
            };
            xhr.send();
        }

        // Carrega os episódios da primeira temporada ao carregar a página
        window.onload = function() {
            loadEpisodios();
        };
        </script>

        <script>
            // Animação
            document.addEventListener("DOMContentLoaded", function () {
            document.body.style.opacity = "1";
            });
        </script>


    </div>
</body>

</html>