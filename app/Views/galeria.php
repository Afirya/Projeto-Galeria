<?php /** @var array $imagens */?>
<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>
    <p>
        Bem vindo a galeria de fotos da estagiária
    </p>

    <!-- Galeria -->
    <div class="galeria">
        <?php foreach ($imagens as $chave => $item) { ?>
            <img src="<?php echo $item->caminho; ?>"  width="500" class="imagem" <?php echo ($chave > 0) ? 'style="display: none;"' : ''; ?> >
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

<?php $this->endSection(); ?>

