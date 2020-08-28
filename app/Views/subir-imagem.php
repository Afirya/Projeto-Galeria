<?php /** @var int $id_galeria */?>
<?php /** @var string $mensagem */?>

<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>

    <div class="container">

        <h1 class="centro-margem">
            Adicionando nova foto.
        </h1>

        <div class="row">

            <div class="col-3"></div>

            <div class="col-6">

                <div class="centro">
                    <label for="ex2">Selecione a foto:</label>
                </div>

                <form action="/galeria/subir_imagem/<?php echo $id_galeria; ?>" method="post" enctype="multipart/form-data">

                    <div class="centro-margem">
                        <input name="imagem" type="file">
                    </div>

                    <div class="centro">
                        <button type="submit" class="btn btn-secondary">Enviar</button>
                    </div>

                </form>

            </div>

            <div class="col-3"></div>

        </div>
    </div>

    <?php echo $mensagem; ?>
<?php $this->endSection(); ?>


