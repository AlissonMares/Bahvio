<?php
$returnArr = new stdClass();
$returnArr->success = false;
$returnArr->message = "Sem informações para alterar a série";

if (!empty($_POST)) {
    include_once('../conexao/connect.php');

    $sql_update = "UPDATE episodios SET 
        titulo = '" . $_POST['titulo'] . "', 
        descricao = '" . $_POST['descricao'] . "', 
        duracao = '" . $_POST['duracao'] . "' 
        WHERE episodios.id = '" . $_POST['id'] . "';";

    $resultUpdate = $conn->query(query: $sql_update); 

    if ($resultUpdate) {
        $returnArr->success = true;
        $returnArr->message = "Série alterada com sucesso";
    } else {
        $returnArr->message = "Erro ao alterar a série";
    }

}

echo json_encode($returnArr);
?>