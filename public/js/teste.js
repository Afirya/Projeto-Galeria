var controle = 0
var imagens = document.getElementsByClassName("imagem");
var numeroDeImagens = imagens.length;

function PassarProxima() {
    if(controle < (numeroDeImagens-1)) {
        controle++;
    }
    AtualizarFoto();
}

function PassarAnterior() {
    if (controle > 0) {
        controle--;
    }
    AtualizarFoto();
}

function AtualizarFoto() {

    for(var i = 0 ; i < numeroDeImagens; i++) {
        var umaImagem = imagens[i];
        if (i == controle) {
            umaImagem.style.display = "inline-block";
        } else {
            umaImagem.style.display = "none";
        }

    }
}