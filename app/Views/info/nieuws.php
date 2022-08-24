<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wide-container mt-4" style="margin-left: 50px; margin-right: 50px;">
        <div class="d-flex justify-content-evenly">
            <div>
                <h1 class="text-center">Nieuwsbrieven</h1>
                <?php if (! empty($nieuws) && is_array($nieuws)): ?>
                    <?php $array = array() ?>
                    <?php foreach ($nieuws as $nieuwtje): ?>
                        <?php $titel = esc(substr($nieuwtje['titel'], strlen($nieuwtje['titel']) - 4)) ?>
                        <?php if (!in_array($titel, $array)): ?>
                            <h3 class="mt-3">Uit <?= esc($titel) ?></h3>
                            <ul class="list-group">
                                <?php foreach ($nieuws as $nieuw): ?>
                                    <?php if (esc(substr($nieuw['titel'], strlen($nieuw['titel']) - 4)) == $titel): ?>
                                            <a href="<?= esc($nieuw['url']) ?>" class="list-group-item list-group-item-action list-group-item-info" target="_blank">
                                                <?= esc($nieuw['titel']) ?>
                                            </a>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </ul>
                            <div class="post"></div>
                            <?php array_push($array, $titel)?>
                        <?php endif ?>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
            <div class="agenda-container">
                <h1 class="text-center">Nieuws</h1>
                    <div class="post">
                        <h4>Omgaan met boosheid en frustraties</h4>
                        <p>Thema-avond 'Waarom word ik boos?' <a href="https://www.lgal.nl/documenten/nieuwsberichten/2019/Omgaan%20met%20%20boosheid%20en%20frustraties%2027-08-2019.pdf" target="_blank">Lees meer...</a></p>
                    </div>
        
                    <div class="post">
                        <h4>Onderzoek studenten Universiteit Maastricht 2019</h4>
                        <p>Tijdens deze lotgenotenavond gaan we het over het onderwerp wonen hebben. We bespreken onder andere woonsituaties, vervoersopties en voorzieningen in de omgeving. De avond duurt van 19:30 tot 21:30 uur. Inloop is vanaf 19:00 uur. <a href="https://www.lgal.nl/documenten/nieuwsberichten/2019/Onderzoek%20studenten%202019.pdf">Lees meer...</a></p>
                    </div>
        
                    <div class="post">
                        <h4>Herfsthapjes 2019</h4>
                        <p>Hier de gerechten van de herftshapjes 2019. <a href="https://www.lgal.nl/documenten/nieuwsberichten/2019/Herfsthapjes%202019.pdf">Lees meer...</a></p>
                    </div>

                    <div class="post">
                        <h4>Flyer: open gespreksavond 5 april - kort</h4>
                        <p>Van 31 maart tot en met 7 april vindt de landelijke Autismeweek plaats. Het centrale thema dit jaar is: luisteren naar autisme. <a href="https://www.lgal.nl/documenten/nieuwsberichten/2018/Flyer%205%20april.pdf">Lees meer...</a></p>
                    </div>

                    <div class="post">
                        <h4>Verslag congres Autminds 2017 - kort</h4>
                        <p>Dit is het korte verslag van het congres Autminds op 11 november 2017 door Marc Smulders. <a href="https://www.lgal.nl/documenten/nieuwsberichten/2017/Verslag%20congres%20Autminds%202017%20-%20kort.pdf">Lees meer...</a></p>
                    </div>

                    <div class="post">
                        <h4>Verslag congres Autminds 2017 - lang</h4>
                        <p>Onderstaande is een verslag van het congres autminds 2017 waar ik aan deelgenomen heb. Het is overwegend een persoonlijk verslag, omdat het slechts datgene weergeeft wat ik mee gekregen heb en een weergave is van wat ik belangrijk en/of indrukwekkend vind. <a href="https://www.lgal.nl/documenten/nieuwsberichten/2017/Verslag%20congres%20Autminds%202017%20-%20lang.pdf">Lees meer...</a></p>
                    </div>

                    <div class="post">
                        <h4>Samenvatting onderzoek Marline Pijler</h4>
                        <p>Een samenvatting van het onderzoek van Marline Pijler naar de effectiviteit van lotgenotengroepen voor mensen met ASS. <a href="https://www.lgal.nl/documenten/nieuwsberichten/2017/Samenvatting%20onderzoek%20Marline%20Pijler.pdf">Lees meer...</a></p>
                    </div>

                    <div class="post">
                        <h4>Burgerkracht december 2017</h4>
                        <p>Een mooi stuk over de groep in burgerkracht op bladzijde 11. <a href="https://www.lgal.nl/documenten/nieuwsberichten/2017/Burgerkracht%20december%202017.pdf">Lees meer...</a></p>
                    </div>

                    <div class="post">
                        <h4>ASS en rijbewijs</h4>
                        <p>Verslag van de avond over ASS en rijbewijs. <a href="https://www.lgal.nl/documenten/nieuwsberichten/2017/ASS%20en%20rijbewijs.pdf">Lees meer...</a></p>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>