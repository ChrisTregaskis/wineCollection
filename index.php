<?php

require_once 'functions.php';
require_once 'connectDB.php';

$db = connectDB();
$getWines = getWines($db)



?>

<!DOCTYPE html>
<html lang="en-gb">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wine Collection!</title>
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="queries.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300i,400,600&display=swap" rel="stylesheet">

</head>
<body>
    <nav>
        <div class="navTop">
            <div class="logo"><a href="#"></a> </div>
            <div class="title">
                <h1>The Wine Collection.</h1>
            </div>
        </div>
    </nav>

    <section class="collection">
        <div class="container">
            <div class="surround">
                <article class="wine-item">
                    <div class="wine-img wine-img-1"></div>
                    <div class="content">
                        <h3>Babylonstoren Nebukadnesar</h3>
                        <ul>
                            <li><span>Year: </span>2017</li>
                            <li><span>Origin: </span>South Africa</li>
                            <li><span>Profile: </span>Dry red wine</li>
                            <li><span>Body: </span>Full Bodied</li>
                            <li><span>ABV: </span>14.0%</li>
                            <li><span>Cheese: </span>Pont l'Eveque (soft)</li>
                        </ul>
                    </div>
                </article>
                <article class="wine-item">
                    <div class="wine-img wine-img-2"></div>
                    <div class="content">
                        <h3>Haywire White Label Gamay Noir</h3>
                        <ul>
                            <li><span>Year: </span>2016</li>
                            <li><span>Origin: </span>Canada</li>
                            <li><span>Profile: </span>Dry red wine</li>
                            <li><span>Body: </span>Medium Bodied</li>
                            <li><span>ABV: </span>13.0%</li>
                            <li><span>Cheese: </span>Camembert</li>
                        </ul>
                    </div>
                </article>
                <article class="wine-item">
                    <div class="wine-img wine-img-3"></div>
                    <div class="content">
                        <h3>Babylonstoren Nebukadnesar</h3>
                        <ul>
                            <li><span>Year: </span>2017</li>
                            <li><span>Origin: </span>South Africa</li>
                            <li><span>Profile: </span>Dry red wine</li>
                            <li><span>Body: </span>Full Bodied</li>
                            <li><span>ABV: </span>14.0%</li>
                            <li><span>Cheese: </span>Pont l'Eveque (soft)</li>
                        </ul>
                    </div>
                </article>
                <article class="wine-item">
                    <div class="wine-img wine-img-4"></div>
                    <div class="content">
                        <h3>Haywire Gamay Noir</h3>
                        <ul>
                            <li><span>Year: </span>2016</li>
                            <li><span>Origin: </span>Canada</li>
                            <li><span>Profile: </span>Dry red wine</li>
                            <li><span>Body: </span>Medium Bodied</li>
                            <li><span>ABV: </span>13.0%</li>
                            <li><span>Cheese: </span>Camembert</li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>

    </section>

</body>

</html>
