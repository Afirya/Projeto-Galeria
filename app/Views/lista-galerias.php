<?php /** @var array $galerias */?>

<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>

    <div class = "container">

        <h1 class="centro-margem">
            Galerias
        </h1>

        <h3 class="centro-margem">
            Crie sua própria galeria de fotos aqui!
        </h3>

        <div class="centro-margem">
            <a href="/galeria/adicionar" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">
                Adicionar Galeria
            </a>
        </div>

        <div class="row">
            <?php foreach ($galerias as $chave => $item) { ?>
                <div class="col-4">
                    <div class="card card-galeria">
                        <div class="card-body" style="text-align: center;">
                            <a href="/galeria/<?php echo $item->id; ?>" class="text-decoration-none">
                                <h5 class="card-title"><?php echo $item->nome; ?></h5>
                            </a>
                            <a href="/galeria/remover/<?php echo $item->id; ?>" class="btn btn-primary">
                                Remover
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<?php $this->endSection(); ?>


