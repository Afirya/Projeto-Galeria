<?php /** @var string $titulo */?>
<html>

    <head>
        <title><?php echo $titulo ?? "G"; ?></title>
        <link rel="stylesheet" type="text/css" href="/dist/css/styles.css">
    </head>

    <body>
        <?php echo $this->include('menu'); ?>
        <?php $this->renderSection('content'); ?>
        <script type="text/javascript" src="/dist/js/scripts.js"></script>
    </body>
</html>