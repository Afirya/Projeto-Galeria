<?php /** @var array $galerias */?>

<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>
    <?php foreach ($galerias as $item) { ?>
        <p class="classe1">
            <?php echo $item; ?>
        </p>
    <?php } ?>
<?php $this->endSection(); ?>


