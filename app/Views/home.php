<?php /** @var array $imagens */?>

<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>

    <div class="container">

        <h1 class="centro-margem">
            Bem vindo ao Picture Packs!
        </h1>

        <div class="row">
			<?php foreach ($imagens as $chave => $item) { ?>
                <div class="col-3" style="margin-top: 20px;">
                    <img src="<?php echo $item->caminho; ?>" class="img-thumbnail" alt="img">
                </div>
			<?php } ?>
        </div>

    </div>

<?php $this->endSection(); ?>


