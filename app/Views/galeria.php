<?php /** @var array $imagens */?>
<?php /** @var int $id_galeria */?>

<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>

    <div class = "container">

        <h1 class="centro-margem">
            Bem vindo a galeria.
        </h1>

        <div class="centro-margem">
            <a href="/galeria/adicionar_imagem/<?php echo $id_galeria; ?>" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">
                Adicionar foto
            </a>
        </div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 718px; margin: 0px auto;">
            <div class="carousel-inner">
				<?php foreach ($imagens as $chave => $item) { ?>
                    <div class="carousel-item <?php echo ($chave == 0) ? 'active' : ''; ?>">
                        <img src="<?php echo $item->caminho; ?>" class="d-block w-100" alt="não achou a imagem">
                    </div>
				<?php } ?>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">
                    Previous
                </span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">
                    Next
                </span>
            </a>
        </div>

        <br>
        <br>

    </div>

<?php $this->endSection(); ?>

