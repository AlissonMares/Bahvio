<?php
include 'includes/logo-page.php';
include 'conexao/connect.php';
session_start();
$sql_filmes = "SELECT * FROM filmes";
$result_filmes = $conn->query($sql_filmes);

// Consulta para selecionar séries
$sql_series = "SELECT * FROM series";
$result_series = $conn->query($sql_series);

// Verificar se uma ação foi enviada
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $acao = $_POST['acao'];

    if ($acao == 'deletar') {
        // Deleta o filme ou série com o ID
        $tabela = $_POST['tabela'];
        $sql_delete = "DELETE FROM $tabela WHERE id = $id";
        if ($conn->query($sql_delete) === TRUE) {
        } else {
            echo "Erro ao deletar: " . $conn->error;
        }
    } elseif ($acao == 'editar') {
        // Redirecionar para uma página de edição 
        $tabela = $_POST['tabela'];
        header("Location: editar.php?id=$id&tabela=$tabela");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/gerenciamento.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Gerenciamento de Filmes e Séries</title>
</head>

<body>

<div class="header-logo"><img src="assets/images/bahviologo.png" alt="logo"></div>

<div class="header">
    <div class="header-title">
        <div class="back">
            <i class="fa-solid fa-arrow-left" onclick="window.location.href='tela_principal.php'"></i>
        </div>
        <h1>Gerenciamento de Filmes</h1>
        <button type="button" class="btn-cad" onclick="window.location.href = 'inserir.php';">Cadastrar +</button>
    </div>
</div>



    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Ano</th>
            <th>Duração</th>
            <th>Ações</th>
        </tr>

        <?php

        // Exibir filmes
        if ($result_filmes->num_rows > 0) {
            while ($row = $result_filmes->fetch_assoc()) {
                $sqlCat = "SELECT fm.filme_id, fm.categoria_id, cat.nome FROM filme_categoria as fm
                            JOIN categorias as cat 
                            ON cat.id = fm.categoria_id
                            WHERE filme_id = '". $row["id"] ."';";
                $resultCat = $conn->query($sqlCat);
                $categorias = '';
                while ($cat = $resultCat->fetch_object()) {
                    $categorias .= $cat->nome . ', ';
                }

                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["titulo"] . "</td>";
                echo "<td>" . rtrim($categorias, ', ')  . "</td>";
                echo "<td>" . $row["ano"] . "</td>";
                echo "<td>" . $row["duracao"] . "</td>";
                echo "<td>
                <form method='POST' style='display:inline;'>
                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                    <input type='hidden' name='tabela' value='filmes'>
                    <input type='hidden' name='acao' value='editar'>
                    <button type='submit' class = 'btn-edit'>Editar</button>
                </form>
                <form method='POST' style='display:inline;'>
                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                    <input type='hidden' name='tabela' value='filmes'>
                    <input type='hidden' name='acao' value='deletar'>
                    <button type='submit' class = 'btn-delete'onclick=\"return confirm('Tem certeza que deseja deletar este item?');\">Deletar</button>
                </form>
            </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Nenhum filme encontrado</td></tr>";
        }
        ?>
    </table>

    <h1>Gerenciamento de Séries</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Gênero</th>
            <th>Ano</th>
            <th>Temporada</th>
            <th>Ações</th>
        </tr>
        <?php
        // Exibir séries
        if ($result_series->num_rows > 0) {
            while ($row = $result_series->fetch_assoc()) {
                $sqlCat = "SELECT sc.serie_id, sc.categoria_id, cat.nome FROM serie_categoria as sc
                            JOIN categorias as cat 
                            ON cat.id = sc.categoria_id
                            WHERE serie_id = '". $row["id"] ."';";
                $resultCat = $conn->query($sqlCat);
                $categorias = '';
                while ($cat = $resultCat->fetch_object()) {
                    $categorias .= $cat->nome . ', ';
                }

                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["titulo"] . "</td>";
                echo "<td>" . rtrim($categorias, ', ') . "</td>";
                echo "<td>" . $row["ano"] . "</td>";
                echo "<td>" . $conn->query(query: "SELECT COUNT(DISTINCT temporada) as temporada FROM episodios WHERE serie_id = '" . $row["id"] . "'
                ORDER BY temporada;")->fetch_object()->temporada . " temporada(s)</td>";
                echo "<td>
                <form method='POST' style='display:inline;'>
                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                    <input type='hidden' name='tabela' value='series'>
                    <input type='hidden' name='acao' value='editar'>
                    <button type='submit' class = 'btn-edit'>Editar</button>
                </form>
                <form method='POST' style='display:inline;'>
                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                    <input type='hidden' name='tabela' value='series'>
                    <input type='hidden' name='acao' value='deletar'>
                    <button type='submit' class = 'btn-delete' onclick=\"return confirm('Tem certeza que deseja deletar este item?');\">Deletar</button>
                </form>
            </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Nenhuma série encontrada</td></tr>";
        }
        ?>
    </table>

</body>

</html>

<?php
$conn->close();
?>