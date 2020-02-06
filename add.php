<?php

require_once 'functions.php';



?>

<!DOCTYPE html>
<html lang="en-gb">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wine Collection!</title>

    <link rel="shortcut icon" href="favicon.ico" >
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300i,400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="queries.css">

</head>
<body>
<div class="header">
    <div class="page-container">
        <div class="surround">
            <div class="form-container">
                <div class="img"></div>
                <h3>Add a wine to the collection</h3>
                <form>
                    <fieldset>
                        <input type="text" name="wine-name" placeholder="Wine Name" required/>
                    </fieldset>
                    <fieldset>
                        <input type="number" name="wine-year" placeholder="Year" min="1900" max="2020" required/>
                    </fieldset>
                    <fieldset>
                        <input type="text" name="wine-origin" placeholder="Origin" required/>
                    </fieldset>
                    <fieldset>
                        <input type="text" name="wine-profile" placeholder="Profile" required/>
                    </fieldset>
                    <fieldset>
                        <input type="text" name="wine-body" placeholder="Body" required/>
                    </fieldset>
                    <fieldset>
                        <input type="number" name="wine-abv" placeholder="ABV" min="0" max="99" required/>
                    </fieldset>
                    <fieldset>
                        <input type="text" name="wine-cheese" placeholder="Cheese Pairing" required/>
                    </fieldset>
                    <fieldset>
                        <input type="text" name="wine-url" placeholder="url to buy" required/>
                    </fieldset>
                    <fieldset>
                        <input class="submit-btn" type="submit" name="submit">
                    </fieldset>
                </form>
                <div class="form-wine-collection-btn">
                    <a href="index.php" class="back-to-wine-collection">Wine Collection</a>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>

