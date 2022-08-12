<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("./assets/css/bootstrap.min.css"); ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <div class="navbar navbar-dark sticky-top bg-primary d-flex justify-content-evenly">
        <!-- <a href="#" class="navbar-brand col-sm-1 col-md-1 col-lg-1 mt-5 text-center">Home</a>
        <a href="#" class="navbar-brand col-sm-2 col-md-2 col-lg-2 mt-5 text-center">Over Ons</a>
        <a href="#" class="navbar-brand col-sm-2 col-md-2 col-lg-2 mt-5 text-center">Activiteiten</a>
        <a href="#" class="navbar-brand col-sm-2 col-md-2 col-lg-2 mt-5 text-center">Bronnen</a>
        <a href="#" class="navbar-brand col-sm-2 col-md-2 col-lg-2 mt-5 text-center">Meer Info</a>
        <a href="#" class="navbar-brand col-sm-1 col-md-1 col-lg-1 mt-5 text-center">Contact</a> -->

        <a href="/" class="navbar-brand text-center">Home</a>
        <div class="dropdown">
            <a href="#" class="btn navbar-brand text-center dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Over Ons</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="about/historie">Historie</a></li>
                <li><a class="dropdown-item" href="about/bestuur">Bestuur</a></li>
                <li><a class="dropdown-item" href="about/stichting">Stichting</a></li>
            </ul>
        </div>
        <a href="#" class="navbar-brand text-center">Activiteiten</a>
        <i class="bi bi-puzzle-fill fs-1 me-0" style="color: red;"></i>
        <a href="#" class="navbar-brand text-center">Bronnen</a>
        <a href="#" class="navbar-brand text-center">Meer Info</a>
        <a href="#" class="navbar-brand text-center">Contact</a>
    </div>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script type="text/javascript" src="<?php echo base_url("./assets/js/jQuery-3.6.0.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("./assets/js/bootstrap.min.js"); ?>"></script>
</body>
</html>