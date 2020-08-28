<?php /** @var string $titulo */?>

<html>

    <head>
        <title>
            <?php echo $titulo ?? "G"; ?>
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="/dist/css/styles.css">
    </head>

    <body>
        <?php echo $this->include('menu'); ?>
        <?php $this->renderSection('content'); ?>
        <script type="text/javascript" src="/dist/js/scripts.js"></script>
    </body>

</html>