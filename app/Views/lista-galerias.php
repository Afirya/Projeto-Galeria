<?php /** @var array $galerias */?>

<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>

    <?php foreach ($galerias as $chave => $item) { ?>
        <p class="classe1">
            <a href="/galeria/<?php echo $item->id; ?>">
                <?php echo $item->nome; ?>
            </a>
            <a href="/galeria/remover/<?php echo $item->id; ?>" class="remover">
                Remover
            </a>
        </p>
    <?php } ?>

    <a href="/galeria/adicionar" class="adicionar">
        Adicionar
    </a>
<?php $this->endSection(); ?>


