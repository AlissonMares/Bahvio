var player = videojs('my-video');

// Inicia o vídeo automaticamente ao carregar a página
window.addEventListener('load', function() {
    player.play().catch(error => {
        console.log("Auto-play não permitido sem interação do usuário:", error);
    });
});

// Função para mudar a qualidade e manter o tempo de reprodução
function changeQuality(quality) {
    var currentTime = player.currentTime();
    var newSource = 'video/' + videoName + quality + '.mp4';

    player.src({ type: "video/mp4", src: newSource });

    player.one('loadeddata', function() {
        player.currentTime(currentTime);
        player.play();
    });
}

// Evento de seleção de qualidade
document.getElementById('qualitySelect').addEventListener('change', function(e) {
    changeQuality(e.target.value);
});

