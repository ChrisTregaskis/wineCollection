<?php

require 'connectDB.php';
require 'functions.php';

//if submit pressed, call insert data function
if(isset($_POST['submit'])) {
    $wine_name = filterSpecialChar(checkInputString($_POST['wine-name']));
    $wine_year = filterSpecialChar(checkInputNumYear($_POST['wine-year']));
    $wine_origin = filterSpecialChar(checkInputString($_POST['wine-origin']));
    $wine_profile = filterSpecialChar(checkInputString($_POST['wine-profile']));
    $wine_body = filterSpecialChar(checkInputString($_POST['wine-body']));
    $wine_abv = filterSpecialChar(checkInputNumAbv($_POST['wine-abv']));
    $wine_cheese = filterSpecialChar(checkInputString($_POST['wine-cheese']));
    $wine_link = filterSpecialChar(checkInputString($_POST['wine-link']));

    //create db connections
    $db = connectDB();

    //call insertData function and pass inputs and pdo connection
    insertData($wine_name, $wine_year, $wine_origin, $wine_profile,
        $wine_body, $wine_abv, $wine_cheese, $wine_link, $db);

    header('Location: index.php');
}

//var_dump_pre($_POST['submit-btn']);

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
                <form method="post">
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
                        <input type="number" name="wine-abv" placeholder="ABV" min="1" max="99" required/>
                    </fieldset>
                    <fieldset>
                        <input type="text" name="wine-cheese" placeholder="Cheese Pairing" required/>
                    </fieldset>
                    <fieldset>
                        <input type="text" name="wine-link" placeholder="url to buy" required/>
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

