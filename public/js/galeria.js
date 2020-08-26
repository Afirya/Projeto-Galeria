var controle = 0;
var numeroDeImagens = $('.imagem').length;

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
    $('.imagem').each(function(chave, valor) {
        if (chave == controle) {
            $(valor).css('display','inline-block');
        } else {
            $(valor).css('display','none');
        }
    });
}