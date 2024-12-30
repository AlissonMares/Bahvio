<?php
include_once('../conexao/connect.php');

$objReturn = new stdClass();
$objReturn->success = true;
$objReturn->movies = [];

if (isset($_POST) && $_POST['searchValue'] != '') {

    $searchValue = $_POST['searchValue'];

    $sql = "
    SELECT titulo, imagem_url, 'filme' AS tipo 
    FROM filmes 
    WHERE titulo LIKE '%" . $searchValue . "%'
    UNION ALL
    SELECT titulo, imagem_url, 'serie' AS tipo 
    FROM series 
    WHERE titulo LIKE '%" . $searchValue . "%';
    ";
    


    $result = $conn->query($sql);
    if ($result) {
        if ($result->num_rows > 0) {
            while ($movie = $result->fetch_object()) {
                array_push($objReturn->movies, $movie);
            }
        }
    } else {
        $objReturn->success = false;
    }
}

echo json_encode($objReturn);
