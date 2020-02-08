<?php

require_once 'processForm.php';

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
                    <fieldset><input type="text" name="wine-name" placeholder="Wine name" required/></fieldset>
                    <fieldset><input type="number" name="wine-year" placeholder="Year between 1900 - 2020" min="1900" max="2020" required/></fieldset>
                    <fieldset><input type="text" name="wine-origin" placeholder="Origin of wine" required/></fieldset>
                    <fieldset><input type="text" name="wine-profile" placeholder="Profile" required/></fieldset>
                    <fieldset><input type="text" name="wine-body" placeholder="Body" required/></fieldset>
                    <fieldset><input type="number" name="wine-abv" placeholder="ABV / Strength of wine" min="1" max="99" required/></fieldset>
                    <fieldset><input type="text" name="wine-cheese" placeholder="Cheese Pairing" required/></fieldset>
                    <fieldset><input type="text" name="wine-link" placeholder="url to buy"/></fieldset>
                    <fieldset><input class="submit-btn" type="submit" name="submit"></fieldset>
                </form>
                <div class="form-wine-collection-btn">
                    <a href="index.php" class="back-to-wine-collection">Wine Collection</a>
                </div>

                <?php
                    if (isset($_SESSION['error_message'])) {
                        echo '<article>' . $_SESSION['error_message'] . '</article>';
                        unset($_SESSION['error_message']);
                    }
                ?>

            </div>
        </div>
    </div>
</div>


</body>

</html>

