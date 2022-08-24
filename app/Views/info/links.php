<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Links</h2>
        <?php if (! empty($links) && is_array($links)): ?>
            <?php foreach (['Donateurs', 'Belangenorganisaties', 'Behandelaars', 'Forums', 'Overig'] as $type): ?>
                <h3 class="mt-3"><?= esc($type) ?></h3>
                <ul class="list-group">
                <?php foreach ($links as $link): ?>
                    <?php if ($link['type'] == $type): ?>
                            <a href="<?= esc($link['url']) ?>" class="list-group-item list-group-item-action list-group-item-info">
                                <?= esc($link['titel']) ?>
                            </a>
                    <?php endif ?>
                <?php endforeach ?>
                </ul>
                <div class="post"></div>
            <?php endforeach ?>
        <?php else: ?>

        <h3>Geen links gevonden</h3>

        <p>Er zijn geen links in de database gevonden.</p>

        <?php endif ?>
    </div>
</body>
</html>