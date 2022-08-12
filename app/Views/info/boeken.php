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
        <h2>Boeken</h2>

        <?php if (! empty($boeken) && is_array($boeken)): ?>

            <?php foreach ($boeken as $boek): ?>
                
                <h3><?= esc($boek['titel']) ?> - <?= esc($boek['auteur']) ?></h3>
                <div class="row">
                    <div class="col-1">
                        <img src="<?= esc($boek['afbeelding']) ?>" style="width: 100px; height: 150px">
                    </div>
                    <div class="main col-11">
                        <?= esc($boek['samenvatting']) ?>
                    </div>
                </div>

            <?php endforeach ?>

        <?php else: ?>

            <h3>Geen boeken gevonden</h3>

            <p>Er zijn geen boeken in de database gevonden.</p>

        <?php endif ?>
    </div>


<script type="text/javascript" src="<?php echo base_url("./assets/js/jQuery-3.6.0.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("./assets/js/bootstrap.min.js"); ?>"></script>
</body>
</html>