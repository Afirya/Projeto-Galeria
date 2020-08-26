<?php /** @var int $id_galeria */?>
<?php /** @var string $mensagem */?>

<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>
    <h1>
        Nova Galeria
    </h1>

    <form action="/galeria/subir_imagem/<?php echo $id_galeria; ?>" method="post" enctype="multipart/form-data">
        <input name="imagem" type="file">
        <input type="submit" value="criar">
    </form>

    <?php echo $mensagem; ?>
<?php $this->endSection(); ?>


