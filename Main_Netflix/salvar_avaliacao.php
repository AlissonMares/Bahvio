<?php
include 'conexao/connect.php';

session_start();
$usuario_id = $_SESSION['id']; // ID do usuário logado
$titulo = $_POST['titulo'];
$estrelas = intval($_POST['estrelas']);

// Inicializar variáveis
$filme_id = null;
$serie_id = null;

// Obter o ID do filme
$sql_filme = "SELECT id FROM filmes WHERE titulo = ?";
$stmt_filme = $conn->prepare($sql_filme);
$stmt_filme->bind_param("s", $titulo);
$stmt_filme->execute();
$result_filme = $stmt_filme->get_result();
$filme = $result_filme->fetch_assoc();

if ($filme) {
    $filme_id = $filme['id'];
} else {
    // Caso não encontre o filme, tenta encontrar uma série com o mesmo título
    $sql_serie = "SELECT id FROM series WHERE titulo = ?";
    $stmt_serie = $conn->prepare($sql_serie);
    $stmt_serie->bind_param("s", $titulo);
    $stmt_serie->execute();
    $result_serie = $stmt_serie->get_result();
    $serie = $result_serie->fetch_assoc();
    
    if ($serie) {
        $serie_id = $serie['id'];
    }
}

// Verificar se o ID do filme ou da série foi encontrado
if ($filme_id || $serie_id) {
    // Verificar se o usuário já avaliou o filme ou série
    if ($filme_id) {
        $sql_check = "SELECT id FROM avaliacoes WHERE usuario_id = ? AND filme_id = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("ii", $usuario_id, $filme_id);
    } elseif ($serie_id) {
        $sql_check = "SELECT id FROM avaliacoes WHERE usuario_id = ? AND serie_id = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("ii", $usuario_id, $serie_id);
    }
    
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();
    
    if ($result_check->num_rows > 0) {
        // Atualiza avaliação existente
        if ($filme_id) {
            $sql_update = "UPDATE avaliacoes SET estrelas = ? WHERE usuario_id = ? AND filme_id = ?";
            $stmt_update = $conn->prepare($sql_update);
            $stmt_update->bind_param("iii", $estrelas, $usuario_id, $filme_id);
        } elseif ($serie_id) {
            $sql_update = "UPDATE avaliacoes SET estrelas = ? WHERE usuario_id = ? AND serie_id = ?";
            $stmt_update = $conn->prepare($sql_update);
            $stmt_update->bind_param("iii", $estrelas, $usuario_id, $serie_id);
        }
        $stmt_update->execute();
    } else {
        // Insere nova avaliação
        if ($filme_id) {
            $sql_insert = "INSERT INTO avaliacoes (usuario_id, filme_id, estrelas) VALUES (?, ?, ?)";
            $stmt_insert = $conn->prepare($sql_insert);
            $stmt_insert->bind_param("iii", $usuario_id, $filme_id, $estrelas);
        } elseif ($serie_id) {
            $sql_insert = "INSERT INTO avaliacoes (usuario_id, serie_id, estrelas) VALUES (?, ?, ?)";
            $stmt_insert = $conn->prepare($sql_insert);
            $stmt_insert->bind_param("iii", $usuario_id, $serie_id, $estrelas);
        }
        $stmt_insert->execute();
    }
}

$conn->close();
?>
