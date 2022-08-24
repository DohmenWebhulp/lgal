<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("./assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo base_url("./assets/css_lgal/css_lgal.css"); ?>" />
    <title>Document</title>
</head>
<body>
    <div class="navbar navbar-dark sticky-top bg-primary d-flex justify-content-evenly" style="box-shadow: 0px 10px 10px #0d6efd;">
        <a href="/" class="navbar-brand text-center fs-3">Home</a>
        <div class="dropdown">
            <a href="#" class="btn navbar-brand text-center dropdown-toggle fs-3" role="button" id="about" data-bs-toggle="dropdown" aria-expanded="false">Over Ons</a>
            <ul class="dropdown-menu" aria-labelledby="about">
                <li><a class="dropdown-item" href="historie">Historie</a></li>
                <li><a class="dropdown-item" href="bestuur">Bestuur</a></li>
                <li><a class="dropdown-item" href="stichting">Stichting</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a href="#" class="btn navbar-brand text-center dropdown-toggle fs-3" role="button" id="activiteiten" data-bs-toggle="dropdown" aria-expanded="false">Activiteiten</a>
            <ul class="dropdown-menu" aria-labelledby="activiteiten">
                <li><h1 class="dropdown-header fs-5">Lotgenotenavonden</h1></li>
                <li><a class="dropdown-item" href="brunssum">Brunssum</a></li>
                <li><a class="dropdown-item" href="maastricht">Maastricht</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="anders">Andere activiteiten</a></li>
            </ul>
        </div>
        <img src="./images/lgal_limburg.png" style="width: 30px; height: 70px;">
        <!-- <i class="bi bi-puzzle-fill me-0" style="color: red; padding-right: 25px; font-size: 5rem"></i> -->
        <a href="documenten" class="navbar-brand text-center fs-3">Bronnen</a>
        <div class="dropdown">
            <a href="#" class="btn navbar-brand text-center dropdown-toggle fs-3" role="button" id="info" data-bs-toggle="dropdown" aria-expanded="false">Meer info</a>
            <ul class="dropdown-menu" aria-labelledby="info">
                <li><a class="dropdown-item" href="autisme">Autisme</a></li>
                <li><a class="dropdown-item" href="vacatures">Vacatures</a></li>
                <li><a class="dropdown-item" href="fotos">Foto's</a></li>
                <li><a class="dropdown-item" href="boeken">Boeken</a></li>
                <li><a class="dropdown-item" href="films">Films</a></li>
                <li><a class="dropdown-item" href="links">Links</a></li>
                <li><a class="dropdown-item" href="nieuws">Nieuws</a></li>
            </ul>
        </div>
        <a href="contact" class="navbar-brand text-center fs-3">Contact</a>
    </div>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script type="text/javascript" src="<?php echo base_url("./assets/js/jQuery-3.6.0.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("./assets/js/bootstrap.min.js"); ?>"></script>
</body>
</html>