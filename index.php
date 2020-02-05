<?php

require_once 'functions.php';
require_once 'connectDB.php';

$db = connectDB();
$wines = getWines($db);

$displayWines = '';
if (keysExist($wines) == true) {
    $displayWines = displayWines($wines);
} else {
    $displayWines = 'error! array keys missing from displayWines function';
}

?>

<!DOCTYPE html>
<html lang="en-gb">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wine Collection!</title>

    <link rel="shortcut icon" href="favicon.ico" >
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
                <?php echo $displayWines; ?>
            </div>
        </div>
    </section>

</body>

</html>

