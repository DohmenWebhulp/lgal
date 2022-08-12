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
        <h2>Links</h2>
        <?php if (! empty($links) && is_array($links)): ?>
            <?php foreach (['Donateur', 'Belangenorganisatie', 'Behandelaar', 'Forum', 'Overig'] as $type): ?>
                <h3><?= esc($type) ?></h3>
                <?php foreach ($links as $link): ?>
                    <?php if ($link['type'] == $type): ?>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="<?= esc($link['url']) ?>"><?= esc($link['titel']) ?></a>
                            </li>
                        </ul>
                    <?php endif ?>
                <?php endforeach ?>
            <?php endforeach ?>
        <?php else: ?>

        <h3>Geen links gevonden</h3>

        <p>Er zijn geen links in de database gevonden.</p>

        <?php endif ?>
    </div>

<script type="text/javascript" src="<?php echo base_url("./assets/js/jQuery-3.6.0.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("./assets/js/bootstrap.min.js"); ?>"></script>
</body>
</html>