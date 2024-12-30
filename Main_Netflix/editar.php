<?php
include 'includes/logo-page.php';
include 'conexao/connect.php';
session_start();

// Verificar se ID e tabela foram passados na URL
if (isset($_GET['id']) && isset($_GET['tabela'])) {
    $id = $_GET['id'];
    $tabela = $_GET['tabela'];

    // Consulta para obter os dados de filmes, séries ou episódios
    if ($tabela == 'episodios') {
        $sql = "SELECT * FROM episodios WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "Episódio não encontrado.";
            exit();
        }
    } elseif ($tabela == 'filmes' || $tabela == 'series') {
        $sql = "SELECT * FROM $tabela WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "Item não encontrado.";
            exit();
        }
    }
} else {
    echo "ID ou tabela não definidos.";
    exit();
}

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $genero = $_POST['genero_P'];

    // Dados específicos para filmes, séries e episódios
    if ($tabela == 'filmes') {
        $tabela_categoria_assoc = 'filme_categoria';
        $tabela_col_categoria_assoc = 'filme_id';

        $ano = $_POST['ano'];
        $duracao = $_POST['duracao'];
        $imagem_url = $_POST['imagem_url'];
        $idade = $_POST['idade'];
        $sql_update = "UPDATE filmes SET titulo = ?, ano = ?, descricao = ?, duracao = ?, imagem_url = ?, idade = ? WHERE id = ?";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param("ssssssi", $titulo, $ano, $descricao, $duracao, $imagem_url, $idade, $id);
    } elseif ($tabela == 'series') {
        $tabela_categoria_assoc = 'serie_categoria';
        $tabela_col_categoria_assoc = 'serie_id';
        
        $ano = $_POST['ano'];
        //$temporada = $_POST['temporada'];
        $imagem_url = $_POST['imagem_url'];
        $idade = $_POST['idade'];
        $sql_update = "UPDATE series SET titulo = ?, ano = ?, descricao = ?, imagem_url = ?, idade = ? WHERE id = ?";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param("sssssi", $titulo, $ano, $descricao, $imagem_url, $idade, $id);
    } elseif ($tabela == 'episodios') {
        //$temporada = $_POST['temporada'];
        $numero_episodio = $_POST['numero_episodio'];
        $duracao = $_POST['duracao'];
        $serie_id = $_POST['serie_id'];
        $sql_update = "UPDATE episodios SET titulo = ?, descricao = ?, numero_episodio = ?, duracao = ? WHERE id = ?";
        $stmt = $conn->prepare($sql_update);
        $stmt->bind_param("ssssi", $titulo, $descricao, $numero_episodio, $duracao, $id);
    }

    if ($stmt->execute()) {
        $sql = "DELETE FROM ". $tabela_categoria_assoc ." WHERE ". $tabela_col_categoria_assoc ." = ?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        foreach ($genero as $key => $value) {
            $sql = "INSERT INTO " . $tabela_categoria_assoc . " (" . $tabela_col_categoria_assoc . ", categoria_id) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ii", $id, $value);
            $stmt->execute();
        }

        header("Location: gerenciamento.php"); // Redirecionar após a atualização
        exit();
    } else {
        echo "Erro ao atualizar: " . $conn->error;
    }
}

// Exclusão de Episódios, Filmes ou Séries
if (isset($_GET['delete']) && isset($_GET['id']) && $_GET['tabela'] == 'episodios') {
    $id = $_GET['id'];
    $sql_delete = "DELETE FROM episodios WHERE id = ?";
    $stmt = $conn->prepare($sql_delete);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Episódio excluído com sucesso!";
        header("Location: gerenciamento.php");
        exit();
    } else {
        echo "Erro ao excluir episódio: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/editar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Editar Item</title>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script>
        $(function() {
            loadEpisodios();
        });
    </script>
</head>

<body>

<div class="header-logo"><img src="assets/images/bahviologo.png" alt="logo"></div>
    <div class="header-title">
        <div class="back">
            <i class="fa-solid fa-arrow-left" onclick="history.back()"></i>
        </div>
    </div>


    <form method="POST" novalidate>
    <h1>Editar <?php echo $tabela == 'filmes' ? 'Filme' : ($tabela == 'series' ? 'Série' : 'Episódio'); ?></h1>
        <div class="left">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="<?php echo $row['titulo']; ?>" required>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" required><?php echo $row['descricao']; ?></textarea>

            <?php if ($tabela == 'filmes'): ?>
                <label for="genero_P">Gênero:</label>
                <?php
                $sqlAtualCat = "SELECT categoria_id FROM filme_categoria WHERE filme_id = '" . $row['id'] . "'";
                $resultAtualCat = $conn->query($sqlAtualCat);
                $arrCatAtual = [];
                while ($rowAtualCat = $resultAtualCat->fetch_object()) {
                    $arrCatAtual[] = $rowAtualCat->categoria_id;
                }
                ?>
                <select name="genero_P[]" multiple style="height: 200px;">
                    <?php

                    $sqlCat = "SELECT * FROM categorias";
                    $resultCat = $conn->query($sqlCat);
                    while ($rowCat = $resultCat->fetch_object()) {
                    ?>
                        <option value="<?php echo $rowCat->id; ?>" <?php echo in_array($rowCat->id, $arrCatAtual) ? 'selected' : ''; ?>><?php echo $rowCat->nome; ?></option>
                    <?php
                    }
                    ?>
                </select>

                
                <label for="imagem_url">URL da Imagem:</label>
                <input type="text" id="imagem_url" name="imagem_url" value="<?php echo $row['imagem_url']; ?>" required>

                <label for="ano">Ano:</label>
                <input type="text" id="ano" name="ano" value="<?php echo $row['ano']; ?>" required>

                <label for="duracao">Duração:</label>
                <input type="text" id="duracao" name="duracao" value="<?php echo $row['duracao']; ?>" required>

                <label for="idade">Classificação:</label>
                <input type="text" id="idade" name="idade" value="<?php echo $row['idade']; ?>" required>
            <?php elseif ($tabela == 'series'): ?>
                <label for="genero_P">Gênero:</label>

                <?php
                $sqlAtualCat = "SELECT categoria_id FROM serie_categoria WHERE serie_id = '" . $row['id'] . "'";
                $resultAtualCat = $conn->query($sqlAtualCat);
                $arrCatAtual = [];
                while ($rowAtualCat = $resultAtualCat->fetch_object()) {
                    $arrCatAtual[] = $rowAtualCat->categoria_id;
                }
                ?>
                <select name="genero_P[]" multiple style="height: 200px;">
                    <?php

                    $sqlCat = "SELECT * FROM categorias";
                    $resultCat = $conn->query($sqlCat);
                    while ($rowCat = $resultCat->fetch_object()) {
                    ?>
                        <option value="<?php echo $rowCat->id; ?>" <?php echo in_array($rowCat->id, $arrCatAtual) ? 'selected' : ''; ?>><?php echo $rowCat->nome; ?></option>
                    <?php
                    }
                    ?>
                </select>

                <label for="imagem_url">URL da Imagem:</label>
                <input type="text" id="imagem_url" name="imagem_url" value="<?php echo $row['imagem_url']; ?>" required>

                <label for="ano">Ano:</label>
                <input type="text" id="ano" name="ano" value="<?php echo $row['ano']; ?>" required>

                <script>
                    function loadEpisodios() {
                        var temporada = document.getElementById('temporada').value;
                        var episodiosContainer = document.getElementById('episodios-container');
                        var episodiosList = document.getElementById('episodios-list');

                        if (!temporada) {
                            episodiosContainer.style.display = 'none';
                            return;
                        }

                        episodiosContainer.style.display = 'block';

                        episodiosList.innerHTML = '';

                        var xhr = new XMLHttpRequest();
                        xhr.open("GET", "buscar_episodios.php?titulo=<?php echo urlencode($row['titulo']); ?>&temporada=" + temporada, true);
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

                                        var itemDescContainer = document.createElement('div');
                                        itemDescContainer.classList.add('episodio-desc-container');

                                        // Título do episódio
                                        var titulo = document.createElement('input');
                                        titulo.type = 'text';
                                        titulo.value = ep.titulo;
                                        titulo.classList.add('episodio-titulo');
                                        itemDescContainer.appendChild(titulo);

                                        // Descrição do episódio
                                        var descricao = document.createElement('input');
                                        descricao.type = 'text';
                                        descricao.value = ep.descricao;
                                        descricao.classList.add('episodio-descricao');
                                        itemDescContainer.appendChild(descricao);

                                        // Duração do episódio
                                        var duracao = document.createElement('input');
                                        duracao.type = 'text';
                                        duracao.value = ep.duracao;
                                        duracao.classList.add('episodio-duracao');
                                        itemDescContainer.appendChild(duracao);

                                        // Botão de salvar
                                        var salvarButton = document.createElement('button');
                                        salvarButton.type = 'button';
                                        salvarButton.innerHTML = 'Salvar';
                                        salvarButton.classList.add('salvar-btn');
                                        salvarButton.onclick = function() {
                                            // Enviar os dados para o backend para salvar
                                            var novoTitulo = titulo.value;
                                            var novaDescricao = descricao.value;
                                            var novaDuracao = duracao.value;
                                            

                                            $.ajax({
                                                url: "includes/editar_episodio.php",
                                                type: 'post',
                                                data: {
                                                    id: ep.id,
                                                    titulo: novoTitulo,
                                                    descricao: novaDescricao,
                                                    duracao: novaDuracao
                                                },
                                                success: function(data) { //200
                                                    const obj = JSON.parse(data);
                                                    alert(obj.message);
                                                },
                                                error: function() {
                                                    alert('Erro ao atualizar o eposódio');
                                                }
                                            });
                                        };
                                        itemDescContainer.appendChild(salvarButton);

                                        // Botão de excluir
                                        var excluirButton = document.createElement('button');
                                        excluirButton.innerHTML = 'Excluir';
                                        excluirButton.classList.add('excluir-btn');
                                        excluirButton.onclick = function() {
                                            // Excluir o episódio
                                            var deleteXhr = new XMLHttpRequest();
                                            deleteXhr.open("POST", "excluir_episodio.php", true);
                                            deleteXhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                                            deleteXhr.onreadystatechange = function() {
                                                if (deleteXhr.readyState === 4 && deleteXhr.status === 200) {
                                                    alert('Episódio excluído com sucesso!');
                                                    li.remove(); // Remove o episódio da lista
                                                }
                                            };
                                            deleteXhr.send("id=" + ep.id);
                                        };
                                        itemDescContainer.appendChild(excluirButton);

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
                </script>

                <label for="idade">Classificação:</label>
                <input type="text" id="idade" name="idade" value="<?php echo $row['idade']; ?>" required>
        

                <label for="temporada">Temporada:</label>
                <select id="temporada" name="temporada" required onchange="loadEpisodios();">
                    <?php
                    // Query para pegar as temporadas com base no ID da série
                    $sql_temporadas = "SELECT DISTINCT temporada FROM episodios WHERE serie_id = ? ORDER BY temporada";
                    $stmt_temporadas = $conn->prepare($sql_temporadas);
                    $stmt_temporadas->bind_param("i", $row['id']); // Usar o ID da série para buscar as temporadas
                    $stmt_temporadas->execute();
                    $result_temporadas = $stmt_temporadas->get_result();

                    if ($result_temporadas->num_rows > 0) {
                        while ($temp = $result_temporadas->fetch_assoc()) {
                            echo "<option value='" . $temp['temporada'] . "' " . ($temp['temporada'] == $row['temporada'] ? 'selected' : '') . ">" . $temp['temporada'] . "° temporada</option>";
                        }
                    } else {
                        echo "<option value=''>Nenhuma temporada encontrada</option>";
                    }
                    ?>
                </select>
                <p id="episodios-title">
                    Episódios:
                </p>

             
                <div id="episodios-container" style="display: none;">
                    <ul id="episodios-list"></ul>
                </div>
        </div>
    <?php elseif ($tabela == 'episodios'): ?>
        <label for="numero_episodio">Número do Episódio:</label>
        <input type="text" id="numero_episodio" name="numero_episodio" value="<?php echo $row['numero_episodio']; ?>"
            required>

        <label for="duracao">Duração:</label>
        <input type="text" id="duracao" name="duracao" value="<?php echo $row['duracao']; ?>" required>

        <label for="temporada">Temporada:</label>
        <select id="temporada" name="temporada" required>
            <?php
                // Query para pegar as temporadas de uma série
                $sql_temporadas = "SELECT DISTINCT temporada FROM episodios WHERE serie_id = ? ORDER BY temporada";
                $stmt_temporadas = $conn->prepare($sql_temporadas);
                $stmt_temporadas->bind_param("i", $row['serie_id']); // Usar o ID da série para buscar as temporadas
                $stmt_temporadas->execute();
                $result_temporadas = $stmt_temporadas->get_result();

                if ($result_temporadas->num_rows > 0) {
                    while ($temp = $result_temporadas->fetch_assoc()) {
                        echo "<option value='" . $temp['temporada'] . "' " . ($temp['temporada'] == $row['temporada'] ? 'selected' : '') . ">" . $temp['temporada'] . "</option>";
                    }
                }
            ?>
        </select>
    <?php endif; ?>
    </div>

    <div class="right">
        <button type="submit">Atualizar</button>
    </div>
    </form>

    <?php if ($tabela == 'episodios'): ?>
        <div class="episodes-list">
            <h2>Episódios</h2>
            <?php
            // Exibir lista de episódios para a série
            $sql_episodios = "SELECT * FROM episodios WHERE serie_id = ? ORDER BY temporada, numero_episodio";
            $stmt_episodios = $conn->prepare($sql_episodios);
            $stmt_episodios->bind_param("i", $row['serie_id']);
            $stmt_episodios->execute();
            $result_episodios = $stmt_episodios->get_result();

            if ($result_episodios->num_rows > 0) {
                while ($episodio = $result_episodios->fetch_assoc()) {
                    echo "<div class='episode-item'>";
                    echo "<h3>Temporada " . $episodio['temporada'] . " - Episódio " . $episodio['numero_episodio'] . "</h3>";
                    echo "<p>" . $episodio['descricao'] . "</p>";
                    echo "</div>";
                }
            }
            ?>
        </div>
    <?php endif;



    $conn->close();
    ?>
</body>

</html>