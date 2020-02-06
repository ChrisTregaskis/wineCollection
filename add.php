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
                        <label></label><input type="text" name="wine-name" placeholder="Wine Name"/>
                    </fieldset>
                    <fieldset>
                        <label></label><input type="date" name="wine-name"/>
                    </fieldset>
                    <fieldset>
                        <label></label><input type="text" name="wine-name" placeholder="Origin"/>
                    </fieldset>
                    <fieldset>
                        <label></label><input type="text" name="wine-name" placeholder="Profile"/>
                    </fieldset>
                    <fieldset>
                        <label></label><input type="text" name="wine-name" placeholder="Body"/>
                    </fieldset>
                    <fieldset>
                        <label></label><input type="number" name="wine-name" placeholder="ABV"/>
                    </fieldset>
                    <fieldset>
                        <label></label><input type="text" name="wine-name" placeholder="Cheese Pairing"/>
                    </fieldset>
                    <fieldset>
                        <label></label><input type="text" name="wine-name" placeholder="url to buy"/>
                    </fieldset>
                    <fieldset>
                        <input type="submit">
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

