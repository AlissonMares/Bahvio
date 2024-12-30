<?php
include 'includes/logo-page.php';
include 'conexao/connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tipo = $_POST['tipo'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $genero = $_POST['genero_P'];
    
    if ($tipo === 'filmes') {
        $ano = $_POST['ano'];
        $duracao = $_POST['duracao'];
        $imagem_url = $_POST['imagem_url'];
        $idade = $_POST['idade'];
        $tabela_categoria_assoc = 'filme_categoria';
        $tabela_col_categoria_assoc = 'filme_id';

        // Inserir o filme
        $sql = "INSERT INTO filmes (titulo, descricao, ano, duracao, imagem_url, idade) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $titulo, $descricao, $ano, $duracao, $imagem_url, $idade);       

    } elseif ($tipo === 'series') {
        $ano = $_POST['ano'];
        $imagem_url = $_POST['imagem_url'];
        $idade = $_POST['idade'];
        $tabela_categoria_assoc = 'serie_categoria';
        $tabela_col_categoria_assoc = 'serie_id';

        // Inserir a série
        $sql = "INSERT INTO series (titulo, descricao, ano, imagem_url, idade) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $titulo, $descricao, $ano, $imagem_url, $idade);
      
    } elseif ($tipo === 'episodios') {
        $numero_episodio = $_POST['numero_episodio'];
        $duracao = $_POST['duracao-ep'];
        $serie_id = $_POST['serie_id'];
        $temporada = $_POST['temporada']; 
    
        // Inserir o episódio
        $sql = "INSERT INTO episodios (titulo, descricao, numero_episodio, duracao, serie_id, temporada) 
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssii", $titulo, $descricao, $numero_episodio, $duracao, $serie_id, $temporada);
    }


    // Executar a inserção
    if ($stmt->execute()) {
        $insertedId = $stmt->insert_id;
    
        foreach ($genero as $key => $value) {
            $sql = "INSERT INTO " . $tabela_categoria_assoc . " (" . $tabela_col_categoria_assoc . ", categoria_id) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ii", $insertedId, $value);
            $stmt->execute();
        }
        header("Location: gerenciamento.php"); // Redirecionar após inserir
        exit();
    } else {
        echo "Erro ao inserir: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/inserir.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Cadastro no Catálogo</title>
</head>
<body>

<div class="header-logo"><img src="assets/images/bahviologo.png" alt="logo"></div>
    <div class="header-title">
        <div class="back">
            <i class="fa-solid fa-arrow-left" onclick="history.back()"></i>
        </div>
    </div>
    <form method="POST" novalidate>
    <h1>Adicionar no Catálogo</h1>
    <label for="tipo">Tipo:</label>
    <select id="tipo" name="tipo" required>
        <option value="filmes">Filme</option>
        <option value="series">Série</option>
        <option value="episodios">Episódio</option>
    </select>

    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo" required>

    <div id="campos-genero" style="display: none;">
        <label for="genero_P[]">Gênero:</label>
        <select name="genero_P[]" multiple style="height: 200px;">
            <?php
            $sql = "SELECT * FROM categorias";
            $result = $conn->query($sql);
            while ($row = $result->fetch_object()) {
            ?>
                <option value="<?php echo $row->id; ?>"><?php echo $row->nome; ?></option>
            <?php
            }
            ?>
        </select>
    </div>

    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao" required></textarea>

    <div id="campos-filmes-series" style="display: none;">

        <label for="imagem_url">URL da Imagem:</label>
        <input type="text" id="imagem_url" name="imagem_url">

        <label for="ano">Ano:</label>
        <input type="text" id="ano" name="ano">

        <label for="idade">Classificação:</label>
        <input type="text" id="idade" name="idade" placeholder="Ex: 16+" required>
    </div>

    <div id="campos-filmes" style="display: none;">
        <label for="duracao">Duração:</label>
        <input type="text" id="duracao" name="duracao" placeholder="Ex: 2h 17min" required>
    </div>

    <div id="campos-episodios" style="display: none;">
        <label for="serie_id">Série:</label>
        <select id="serie_id" name="serie_id" required>
            <?php
            $sql_series = "SELECT id, titulo FROM series";
            $result_series = $conn->query($sql_series);
            while ($row_series = $result_series->fetch_assoc()) {
                echo "<option value='{$row_series['id']}'>{$row_series['titulo']}</option>";
            }
            ?>
        </select>

        <label for="temporada">Temporada:</label>
        <input type="text" id="temporada" name="temporada">

        <label for="numero_episodio">Número do Episódio:</label>
        <input type="text" id="numero_episodio" name="numero_episodio">

        <label for="duracao-ep">Duração:</label>
        <input type="text" id="duracao-ep" name="duracao-ep" placeholder="Ex: 1hr 45min ou 45min" required>
    </div>

    <button type="submit">Inserir</button>
</form>

<script>
    const tipo = document.getElementById('tipo');
    const camposGenero = document.getElementById('campos-genero');
    const camposFilmesSeries = document.getElementById('campos-filmes-series');
    const camposFilmes = document.getElementById('campos-filmes');
    const camposEpisodios = document.getElementById('campos-episodios');

    function atualizarCampos() {
        camposGenero.style.display = (tipo.value === 'filmes' || tipo.value === 'series') ? 'block' : 'none';
        camposFilmesSeries.style.display = (tipo.value === 'filmes' || tipo.value === 'series') ? 'block' : 'none';
        camposFilmes.style.display = (tipo.value === 'filmes') ? 'block' : 'none';
        camposEpisodios.style.display = (tipo.value === 'episodios') ? 'block' : 'none';
    }

    tipo.addEventListener('change', function () {
       atualizarCampos();
    });

    window.onload = function(e){ 
        atualizarCampos(); 
    };
</script>

</body>
</html>
