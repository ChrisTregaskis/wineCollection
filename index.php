<?php

require_once 'functions.php';
require_once 'connectDB.php';

$db = connectDB();
$wines = getWines($db);


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
<!--                <article class="wine-item">-->
<!--                    <div class="wine-img" style="background-image: url('Resources/imgs/BABYLONSTOREN_Nebukadnesar_x700.jpg')"></div>-->
<!--                    <div class="content">-->
<!--                        <h3>Babylonstoren Nebukadnesar</h3>-->
<!--                        <ul>-->
<!--                            <li><span>Year: </span>2017</li>-->
<!--                            <li><span>Origin: </span>South Africa</li>-->
<!--                            <li><span>Profile: </span>Dry red wine</li>-->
<!--                            <li><span>Body: </span>Full Bodied</li>-->
<!--                            <li><span>ABV: </span>14.0%</li>-->
<!--                            <li><span>Cheese: </span>Pont l'Eveque (soft)</li>-->
<!--                        </ul>-->
<!--                        <div class="view-more-link"><a href="#">View More</a></div>-->
<!--                    </div>-->
<!--                </article>-->
<!--                <article class="wine-item">-->
<!--                    <div class="wine-img" style="background-image: url('Resources/imgs/HAYWIRE_Gamay_Noir_Okanagan_Valley_Crush_Pad_Winery_x700.jpg')"></div>-->
<!--                    <div class="content">-->
<!--                        <h3>Haywire White Label Gamay Noir</h3>-->
<!--                        <ul>-->
<!--                            <li><span>Year: </span>2016</li>-->
<!--                            <li><span>Origin: </span>Canada</li>-->
<!--                            <li><span>Profile: </span>Dry red wine</li>-->
<!--                            <li><span>Body: </span>Medium Bodied</li>-->
<!--                            <li><span>ABV: </span>13.0%</li>-->
<!--                            <li><span>Cheese: </span>Camembert</li>-->
<!--                        </ul>-->
<!--                        <div class="view-more-link"><a href="#">View More</a></div>-->
<!--                    </div>-->
<!--                </article>-->
<!--                <article class="wine-item">-->
<!--                    <div class="wine-img" style="background-image: url('Resources/imgs/ALVES_DE_SOUSA_Quinta_da_Gaivosa_LBV_Porto_ee1be277-aea9-485f-ab1d-eea4557f2de2_x700.jpg')"></div>-->
<!--                    <div class="content">-->
<!--                        <h3>Babylonstoren Nebukadnesar</h3>-->
<!--                        <ul>-->
<!--                            <li><span>Year: </span>2017</li>-->
<!--                            <li><span>Origin: </span>South Africa</li>-->
<!--                            <li><span>Profile: </span>Dry red wine</li>-->
<!--                            <li><span>Body: </span>Full Bodied</li>-->
<!--                            <li><span>ABV: </span>14.0%</li>-->
<!--                            <li><span>Cheese: </span>Pont l'Eveque (soft)</li>-->
<!--                        </ul>-->
<!--                        <div class="view-more-link"><a href="#">View More</a></div>-->
<!--                    </div>-->
<!--                </article>-->
<!--                <article class="wine-item">-->
<!--                    <div class="wine-img" style="background-image: url('Resources/imgs/BODEGAS_VINATIGO_Gual_6bfe6033-ac6c-42dc-a08e-169db6b7da7f_x700.jpg')"></div>-->
<!--                    <div class="content">-->
<!--                        <h3>Haywire Gamay Noir</h3>-->
<!--                        <ul>-->
<!--                            <li><span>Year: </span>2016</li>-->
<!--                            <li><span>Origin: </span>Canada</li>-->
<!--                            <li><span>Profile: </span>Dry red wine</li>-->
<!--                            <li><span>Body: </span>Medium Bodied</li>-->
<!--                            <li><span>ABV: </span>13.0%</li>-->
<!--                            <li><span>Cheese: </span>Camembert</li>-->
<!--                        </ul>-->
<!--                        <div class="view-more-link"><a href="#">View More</a></div>-->
<!--                    </div>-->
<!--                </article>-->
                <?php

                $displayWines = displayWines($wines);
                echo $displayWines;
                var_dump_pre($wines);

                ?>
            </div>
        </div>

    </section>

</body>

</html>

