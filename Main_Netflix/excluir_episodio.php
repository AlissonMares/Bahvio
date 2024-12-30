<?php
include 'conexao/connect.php';
session_start();

// Verifique se o ID foi enviado via POST
if (isset($_POST['id'])) {
    $id = intval($_POST['id']); // Converte para um inteiro por segurança

    // Prepare a consulta para excluir o episódio
    $sql_delete = "DELETE FROM episodios WHERE id = ?";
    $stmt = $conn->prepare($sql_delete);

    if ($stmt) {
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            // Exclusão bem-sucedida
            echo "Episódio excluído com sucesso!";
        } else {
            // Caso ocorra um erro na execução
            echo "Erro ao excluir episódio: " . $stmt->error;
        }

        $stmt->close();
    } else {
        // Caso ocorra um erro na preparação da consulta
        echo "Erro ao preparar consulta: " . $conn->error;
    }
} else {
    echo "ID do episódio não informado.";
}

// Feche a conexão com o banco de dados
$conn->close();
?>
