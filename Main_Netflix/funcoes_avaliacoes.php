<?php
include_once('conexao/connect.php'); 

function calcularMediaAvaliacao($conn, $filme_id = null, $serie_id = null) {
    if ($filme_id !== null) {
        $campo = "filme_id";
        $id = $filme_id;
    } elseif ($serie_id !== null) {
        $campo = "serie_id";
        $id = $serie_id;
    } else {
        return 0; // Nenhum ID fornecido
    }


    $query = "SELECT AVG(estrelas) AS media FROM avaliacoes WHERE $campo = $id";
    $resultado = mysqli_query($conn, $query);

    if ($resultado) {
        $linha = mysqli_fetch_assoc($resultado); 
        return $linha['media'] ?? 0;
    }

    return 0;
}

function gerarEstrelas($media_avaliacao) {
    $estrelas_cheias = floor($media_avaliacao);
    $meia_estrela = ($media_avaliacao - $estrelas_cheias) >= 0.5 ? 1 : 0;
    $estrelas_vazias = 5 - ($estrelas_cheias + $meia_estrela);

    $html = '';
    for ($i = 0; $i < $estrelas_cheias; $i++) {
        $html .= '<li><i class="fa fa-star text-primary"></i></li>';
    }
    if ($meia_estrela) {
        $html .= '<li><i class="fa fa-star-half text-primary"></i></li>';
    }
    for ($i = 0; $i < $estrelas_vazias; $i++) {
        $html .= '<li><i class="fa fa-star text-secondary"></i></li>';
    }
    return $html;
}
?>
