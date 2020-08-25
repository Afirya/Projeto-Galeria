<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>
    <h1>
        Nova Galeria
    </h1>

    <form action="/galeria/criar" method="post">
        <input type="text" name="nome" placeholder="Nome da Galeria">
        <input type="submit" value="criar">
    </form>

<?php $this->endSection(); ?>


