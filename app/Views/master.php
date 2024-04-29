<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo esc($title ?? 'Estoque Seduc')?></title>
</head>
<body>
    <?php echo base_url()?>
    <?= $this->include('partials/header')?>
    <?= $this->renderSection('content') ?>

    <footer>
        <p>rodapé</p>
    </footer>
</body>
</html>