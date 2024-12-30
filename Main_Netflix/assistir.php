<?php include 'includes/logo-page.php'; ?>

<?php
include 'conexao/connect.php';

$video_folder = 'video/';
$qualities = ['480p', '720p', '1080p'];

$titulo = isset($_GET['titulo']) ? trim($_GET['titulo']) : '';
$tipo = isset($_GET['tipo']) ? $_GET['tipo'] : '';  // Tipo (filme ou serie)
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;  // ID (se disponível)

if (!empty($titulo)) {
    // Se for uma série
    if ($tipo === 'serie' && $id > 0) {
        // Consulta o nome_video do episódio da série
        $sql = "SELECT id, nome_video FROM episodios WHERE id = ? AND titulo = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $id, $titulo);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $episodio_id = $row['id'];
            $nome_video = $row['nome_video'];

            // Procura pelas qualidades do vídeo
            $videos = [];
            foreach ($qualities as $quality) {
                $video_path = $video_folder . $nome_video . $quality . '.mp4';

                if (file_exists($video_path)) {
                    $videos[$quality] = $video_path;
                } else {
                    echo "Erro: O vídeo de qualidade $quality não foi encontrado!<br>";
                }
            }
        } else {
            echo "Erro: Episódio não encontrado ou série não associada ao título.";
            exit;
        }
    }
    // Se for um filme
    else {
        // Consulta o nome_video do filme
        $sql = "SELECT id, nome_video FROM filmes WHERE titulo = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $titulo);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $filme_id = $row['id'];
            $nome_video = $row['nome_video'];

            // Procura pelas qualidades do vídeo
            $videos = [];
            foreach ($qualities as $quality) {
                $video_path = $video_folder . $nome_video . $quality . '.mp4';

                if (file_exists($video_path)) {
                    $videos[$quality] = $video_path;
                } else {
                    echo "Erro: O vídeo de qualidade $quality não foi encontrado!<br>";
                }
            }
        } else {
            echo "Erro: Filme não encontrado no banco de dados.";
            exit;
        }
    }
} else {
    echo "Erro: Título não fornecido.";
    exit;
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylevideo.css">
    <title><?php echo htmlspecialchars($titulo); ?></title>
    <link href="https://vjs.zencdn.net/7.14.3/video-js.css" rel="stylesheet" />
</head>
<body>

<div class="video-container">
<div class="back-arrow" onclick="history.back()">
    &#8592; Voltar
</div>
    <video id="my-video" class="video-js" controls preload="auto" width="640" height="264" data-setup="{}">
        <?php if (isset($videos['480p'])): ?>
            <source src="<?= $videos['480p']; ?>" type="video/mp4" label="480p" />
        <?php endif; ?>

        <?php if (isset($videos['720p'])): ?>
            <source src="<?= $videos['720p']; ?>" type="video/mp4" label="720p" />
        <?php endif; ?>

        <?php if (isset($videos['1080p'])): ?>
            <source src="<?= $videos['1080p']; ?>" type="video/mp4" label="1080p" />
        <?php endif; ?>
    </video>

    <select id="qualitySelect" class="quality-selector">
        <?php if (isset($videos['480p'])): ?>
            <option value="480p">480p</option>
        <?php endif; ?>

        <?php if (isset($videos['720p'])): ?>
            <option value="720p">720p</option>
        <?php endif; ?>

        <?php if (isset($videos['1080p'])): ?>
            <option value="1080p">1080p</option>
        <?php endif; ?>
    </select>
</div>

<script>
    
    var videoName = "<?= $nome_video ?>"; 

    //Deixa o play centralizado

    window.addEventListener('load', function() {
    const bigPlayButton = document.querySelector('.vjs-big-play-button');
    bigPlayButton.style.top = '50%';
    bigPlayButton.style.left = '50%';
    bigPlayButton.style.transform = 'translate(-50%, -50%)';
});

</script>



<script src="https://vjs.zencdn.net/7.14.3/video.min.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>
