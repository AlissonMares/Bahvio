async function carregarFilmes(tipo, generos) {
    console.log("Tipo:", tipo); // Depuração para verificar o tipo
    console.log("Gêneros selecionados:", generos); // Depuração para verificar os gêneros

    try {
        const response = await fetch(`getFilmes_Series.php?tipo=${tipo}&genero=${generos.join(',')}`);
        const text = await response.text(); // Obtém o texto bruto
        console.log("Resposta do servidor:", text); // Exibe a resposta para depuração

        let filmes;
        try {
            filmes = JSON.parse(text); // Tenta converter para JSON
        } catch (e) {
            console.error("Erro ao converter para JSON:", e, text);
            return; // Sai da função se o JSON for inválido
        }

        // Exibe os filmes
        exibirFilmes(filmes);
    } catch (error) {
        console.error("Erro ao carregar filmes:", error);
    }
}

function exibirFilmes(lista) {
    const moviesList = document.getElementById("moviesList");
    moviesList.innerHTML = "<h2>Filmes e Séries</h2>";

    // Verifica se 'lista' é um array
    if (!Array.isArray(lista) || lista.length === 0) {
        moviesList.innerHTML += "<p>Nenhum filme ou série encontrado.</p>";
        return;
    }

    // Loop pelos filmes e adicione ao DOM
    lista.forEach(filme => {
        const movieItem = document.createElement("div");
        movieItem.classList.add("movie-item-list");

        // Método para certificar se o tipo é o correto
        const tipo = filme.tipo;

        movieItem.innerHTML = `
            <img src="${filme.imagem_url}" alt="${filme.titulo}" class="movie-image" />
            <h3>${filme.titulo}</h3>
            <p>Ano: ${filme.ano}</p>
            <p>Classificação: ${filme.idade}</p>
            <p>${tipo === 'serie' ? filme.duracao : filme.duracao}</p>
            <button class="assistir-btn" onclick="window.location.href='${tipo === 'serie' ? 'inf_series.php' : 'inf_filmes.php'}?titulo=${encodeURIComponent(filme.titulo)}'">Assistir</button>
        `;
        moviesList.appendChild(movieItem);
    });
}

function aplicarFiltros() {
    const tipo = document.getElementById("select").value; // Captura o tipo selecionado
    const generosSelecionados = Array.from(
        document.querySelectorAll("#generosContainer input[type='checkbox']:checked")
    ).map(input => input.value); // Captura os gêneros selecionados

    // Se nada for selecionado, então carrega tudo
    carregarFilmes(tipo, generosSelecionados);
}

// Chama a função ao carregar a página
window.onload = () => carregarFilmes('', []); // Carrega todos os filmes e séries inicialmente

// Adiciona evento ao botão de filtrar
const filtrarBtn = document.getElementById("filtrarBtn");
if (filtrarBtn) {
    filtrarBtn.onclick = function (event) {
        event.preventDefault();
        aplicarFiltros();
    };
} else {
    console.error("Botão 'filtrarBtn' não encontrado no DOM!");
}

function verificaTipo() {
    const tipoSelect = document.getElementById("select");
    const optionSelecionarTipo = tipoSelect.querySelector("option[value='']");

    // Verifica se um tipo foi selecionado
    if (tipoSelect.value) {
        // Esconde a opção "Selecionar Tipo"
        optionSelecionarTipo.style.display = 'none'; // Esconde a opção
    } else {
        // Mostra a opção "Selecionar Tipo" se nenhum tipo for selecionado
        optionSelecionarTipo.style.display = 'block'; // Mostra a opção
    }
}
