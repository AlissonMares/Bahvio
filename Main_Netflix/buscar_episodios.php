<?php
include 'conexao/connect.php';

$titulo = isset($_GET['titulo']) ? trim($_GET['titulo']) : '';
$temporada = isset($_GET['temporada']) ? (int)$_GET['temporada'] : 0;

if ($titulo && $temporada) {
    $sql = "SELECT id, numero_episodio, titulo, duracao, descricao FROM episodios WHERE temporada = ? AND serie_id = (SELECT id FROM series WHERE titulo = ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $temporada, $titulo);
    $stmt->execute();
    $result = $stmt->get_result();

    $episodios = [];
    while ($ep = $result->fetch_assoc()) {
        $episodios[] = $ep;
    }

    echo json_encode($episodios);
} else {
    echo json_encode([]);
}
?>
