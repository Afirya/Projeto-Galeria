<?php /** @var array $galerias */?>

<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>
    <?php foreach ($galerias as $chave => $item) { ?>
        <p class="classe1">
            <a href="/galeria/<?php echo $item->id; ?>">
                <?php echo $item->nome; ?>
            </a>
        </p>
    <?php } ?>
<?php $this->endSection(); ?>


