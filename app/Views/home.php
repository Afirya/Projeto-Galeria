<html>

    <head>
        <title>Galeria da estagiária</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/teste.css">
    </head>

    <body>

        <p>
            Bem vindo a galeria de fotos da estagiária
        </p>

        <!-- Galeria -->
        <div class="galeria">
            <?php foreach ($imagens as $chave => $item) { ?>
                <img src="<?php echo $item; ?>"  width="500" class="imagem" <?php echo ($chave > 0) ? 'style="display: none;"' : ''; ?> >
            <?php } ?>
        </div>

        <!-- Controles -->
        <div class="botões">
            <button type="button" onclick="PassarAnterior();" class="botão">
                Anterior
            </button>
            <button type="button" onclick="PassarProxima();" class="botão">
                Próxima
            </button>
        </div>

        <!-- JS -->
        <script type="text/javascript" src="/js/teste.js"></script>
    </body>
</html>
