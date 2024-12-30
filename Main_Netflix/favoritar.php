<?php
session_start();
include_once('conexao/connect.php');


if (!isset($_SESSION['id'])) {
    echo json_encode(['erro' => 'Usuário não autenticado']);
    exit;
}

$usuario_id = $_SESSION['id'];
$titulo = $_GET['titulo'] ?? ''; 
$favoritar = isset($_GET['favoritar']) && $_GET['favoritar'] === 'true'; 


$sql_filme_check = "SELECT id FROM filmes WHERE titulo = '$titulo'";
$result_filme_check = $conn->query($sql_filme_check);
$filme_id = $result_filme_check->fetch_assoc();


$sql_serie_check = "SELECT id FROM series WHERE titulo = '$titulo'";
$result_serie_check = $conn->query($sql_serie_check);
$serie_id = $result_serie_check->fetch_assoc();

if ($filme_id) {

    $id_titulo = $filme_id['id'];
    $tipo_titulo = 'filmes';
} elseif ($serie_id) {

    $id_titulo = $serie_id['id'];
    $tipo_titulo = 'series';
} else {
    echo json_encode(['erro' => 'Título não encontrado']);
    exit;
}


if ($tipo_titulo === 'filmes') {
   
    $sql_fav_check = "SELECT id FROM favoritos WHERE usuario_id = $usuario_id AND filme_id = $id_titulo";
} else {
    
    $sql_fav_check = "SELECT id FROM favoritos WHERE usuario_id = $usuario_id AND serie_id = $id_titulo";
}

$result_check = $conn->query($sql_fav_check);
$favoritado = $result_check->num_rows > 0;


if ($favoritar) {
    if ($favoritado) {

        if ($tipo_titulo === 'filmes') {
            $sql_remove_fav = "DELETE FROM favoritos WHERE usuario_id = $usuario_id AND filme_id = $id_titulo";
        } else {
            $sql_remove_fav = "DELETE FROM favoritos WHERE usuario_id = $usuario_id AND serie_id = $id_titulo";
        }
        $conn->query($sql_remove_fav);
    } else {

        if ($tipo_titulo === 'filmes') {
            $sql_favorito = "INSERT INTO favoritos (usuario_id, filme_id) VALUES ($usuario_id, $id_titulo)";
        } else {
            $sql_favorito = "INSERT INTO favoritos (usuario_id, serie_id) VALUES ($usuario_id, $id_titulo)";
        }
        $conn->query($sql_favorito);
    }
}


echo json_encode(['favoritado' => !$favoritado]);
?>
