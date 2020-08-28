<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>

    <div class="container">

        <h1 class="centro-margem">
            Adicionando nova galeria.
        </h1>

        <div class="row">

            <div class="col-3"></div>

            <div class="col-6">
                <div class="centro">
                    <label for="ex2">
                        Nome da galeria:
                    </label>
                </div>

                <form action="/galeria/criar" method="post">

                <div class="centro-margem">
                    <input class="form-control" id="ex2" type="text" name="nome">
                </div>

                <div class="centro">
                    <button type="submit" class="btn btn-secondary">Criar</button>
                </div>

                </form>

            </div>

            <div class="col-3"></div>

        </div>

    </div>

<?php $this->endSection(); ?>


