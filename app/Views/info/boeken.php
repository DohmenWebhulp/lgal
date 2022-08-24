<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<body>
    <div class="wide-container mt-4" style="margin-left: 80px; margin-right: 80px;">
        <h2 class="text-center">Boeken</h2>

        <?php if (! empty($boeken) && is_array($boeken)): ?>

            <?php foreach ($boeken as $boek): ?>
                
                <div class="mt-4">
                    <h3><?= esc($boek['titel']) ?> - <?= esc($boek['auteur']) ?></h3>
                    <div class="row">
                        <div class="col-1">
                            <img src="<?= esc($boek['afbeelding']) ?>" style="width: 100px; height: 150px">
                        </div>
                        <div class="main col-11">
                            <?= esc($boek['samenvatting']) ?>
                        </div>
                    </div>
                </div>

                <div class="post"></div>

            <?php endforeach ?>

        <?php else: ?>

            <h3>Geen boeken gevonden</h3>

            <p>Er zijn geen boeken in de database gevonden.</p>

        <?php endif ?>
    </div>
</body>
</html>