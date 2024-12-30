<?php
header('Content-Type: application/json');
include_once('conexao/connect.php');

$tipo = $_GET['tipo'] ?? '';
$generos = $_GET['genero'] ?? '';

$generoArray = !empty($generos) ? explode(',', $generos) : [];


$sql = '';

if ($tipo === 'filme') {
    $sql = "SELECT DISTINCT 
                f.titulo, 
                f.ano, 
                f.idade, 
                f.duracao, 
                f.imagem_url, 
                'filme' AS tipo 
            FROM filmes f
            INNER JOIN filme_categoria fc ON f.id = fc.filme_id";
} elseif ($tipo === 'serie') {
    $sql = "SELECT DISTINCT 
                s.titulo, 
                s.ano, 
                s.idade, 
                CONCAT(COUNT(DISTINCT ep.temporada), ' temporada(s)') AS duracao, 
                s.imagem_url, 
                'serie' AS tipo 
            FROM series s
            INNER JOIN serie_categoria sc ON s.id = sc.serie_id
            INNER JOIN episodios ep ON ep.serie_id = s.id
            GROUP BY s.id, s.titulo, s.ano, s.idade, s.imagem_url";
} else {
    $sql = "
        SELECT DISTINCT 
            f.titulo, 
            f.ano, 
            f.idade, 
            f.duracao, 
            f.imagem_url, 
            'filme' AS tipo 
        FROM filmes f
        INNER JOIN filme_categoria fc ON f.id = fc.filme_id
        UNION ALL
        SELECT DISTINCT 
            s.titulo, 
            s.ano, 
            s.idade, 
            CONCAT(COUNT(DISTINCT ep.temporada), ' temporada(s)') AS duracao, 
            s.imagem_url, 
            'serie' AS tipo 
        FROM series s
        INNER JOIN serie_categoria sc ON s.id = sc.serie_id
        INNER JOIN episodios ep ON ep.serie_id = s.id
        GROUP BY s.id, s.titulo, s.ano, s.idade, s.imagem_url";
}


if (!empty($generoArray)) {
    $placeholders = implode(',', array_map('intval', $generoArray)); 

    if ($tipo === 'filme') {
        $sql .= " WHERE fc.categoria_id IN ($placeholders)";
    } elseif ($tipo === 'serie') {
        $sql .= " HAVING s.id IN (
            SELECT DISTINCT sc.serie_id
            FROM serie_categoria sc
            WHERE sc.categoria_id IN ($placeholders)
        )";
    } else {
        $sql .= " WHERE (fc.categoria_id IN ($placeholders) OR sc.categoria_id IN ($placeholders))";
    }
}

// Executa a consulta
$result = $conn->query($sql);

if (!$result) {
    echo json_encode(['error' => $conn->error]);
    exit();
}

$dados = [];

while ($row = $result->fetch_assoc()) {
    $dados[] = $row;
}

echo json_encode($dados);
$conn->close();
?>
