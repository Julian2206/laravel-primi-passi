<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
</head>

<!-- e avviamo l'artisan serve con uno di questi due comandi: php artisan serve oppure, se il primo non funziona:  php -S localhost:8000 -t public
A questo punto, iniziamo a prendere confidenza con le rotte e le views:
cancelliamo la view welcome.blade.php e creiamo una nostra homepage.
Facciamo quindi sì che la rotta / visualizzi home.blade.php
Inizialmente stampiamo un Hello World, poi sentiamoci liberi di sperimentare. -->

<body>
    <h1>Hello World Laravel</h1>
    <h2 style="margin-top: 70px;">Descrizione:</h2>
    <p>Per prima cosa, creiamo un nuovo progetto Laravel 7,</p>
    <p>utilizzando questo comando: <strong style="color: royalblue;"> create-project --prefer-dist laravel/laravel:^7.0 laravel-primi-passi </strong></p>
    <p>Oppure utilizziamo il medesimo comando nella cartella già creata.</p>

    <p style="margin-top: 50px;">Al termine dell'installazione, entriamo nella cartella del progetto <strong style="color: royalblue;"> cd laravel-primi-passi </strong></p>
    <p>e avviamo l'artisan serve con uno di questi due comandi: <strong style="color: royalblue;"> php artisan serve </strong> oppure, se il primo non funziona: <strong style="color:royalblue;"> php -S localhost:8000 -t public </strong></p>
    <h2 style="margin-top: 50px;">A questo punto, iniziamo a prendere confidenza con le rotte e le views:</h2>

    <p>cancelliamo la view <strong style="color: red;"> welcome.blade.php </strong> e creiamo una nostra homepage.</p>
    <p>Facciamo quindi sì che la rotta <strong style="color: red;"> / </strong> visualizzi <strong style="color: red;"> home.blade.php </strong></p>
    <p>Inizialmente stampiamo un <strong style="color: red;"> Hello World </strong>, poi sentiamoci liberi di sperimentare.</p>
</body>

<style>
    h1 {
        margin-top: 70px;
        text-align: center;
        font-size: 40px;
    }
</style>

</html>