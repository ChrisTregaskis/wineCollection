<?php

require_once 'functions.php';
require_once 'connectDB.php';

$db = connectDB();
$wines = getWines($db);

if (keysExist($wines) == true) {
    $displayWines = displayWines($wines);
} else {
    $displayWines = 'Error with input';
}

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
    <nav>
        <div class="navTop">
            <div class="logo"></div>
            <div class="title">
                <h1>The Wine Collection.</h1>
            </div>
        </div>
    </nav>
    <div class="add-wine-btn-container">
        <div class="add-wine-btn-box-placement">
            <a href="add.php" class="active">Add Wine</a>
        </div>
    </div>
        <section class="collection">
        <div class="container">
            <div class="surround">
                <?php echo $displayWines; ?>
            </div>
        </div>
    </section>
    <section>

    </section>

</body>

</html>



