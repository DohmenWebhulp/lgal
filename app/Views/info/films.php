<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url("./assets/css/bootstrap.min.css"); ?>" />
        <title>Document</title>
    </head>
<body>
    <div class="container">
        <h2>Films</h2>

        <?php if (! empty($films) && is_array($films)): ?>

            <?php foreach ($films as $film): ?>
                
                <h3><?= esc($film['titel']) ?> - <?= esc($film['maker']) ?></h3>
                <div class="row">
                    <div class="main col-12">
                        <?= esc($film['beschrijving']) ?> <a href="<?= esc($film['video_url']) ?>">Klik hier om te bekijken</a>
                    </div>
                </div>

            <?php endforeach ?>

        <?php else: ?>

            <h3>Geen films gevonden</h3>

            <p>Er zijn geen films in de database gevonden.</p>

        <?php endif ?>
    </div>


<script type="text/javascript" src="<?php echo base_url("./assets/js/jQuery-3.6.0.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("./assets/js/bootstrap.min.js"); ?>"></script>
</body>
</html>