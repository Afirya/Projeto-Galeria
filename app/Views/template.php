<?php /** @var string $titulo */?>
<html>
    <head>
            <title><?php echo $titulo; ?></title>
            <link rel="stylesheet" type="text/css" href="/dist/css/styles.css">
    </head>
    <body>
        <?php $this->renderSection('content'); ?>
        <script type="text/javascript" src="/dist/js/scripts.js"></script>
    </body>
</html>