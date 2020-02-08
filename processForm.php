<?php

require_once 'connectDB.php';
require_once 'functions.php';

//if (!(isset($_POST['submit']))) {
//    header('Location: index.php');
//}

session_start();

//if submit pressed, call insert data function & process form
if(isset($_POST['submit'])) {
    $wine_name = filterSpecialChar($_POST['wine-name']);
    $wine_year = ($_POST['wine-year']);
    $wine_origin = filterSpecialChar($_POST['wine-origin']);
    $wine_profile = filterSpecialChar($_POST['wine-profile']);
    $wine_body = filterSpecialChar($_POST['wine-body']);
    $wine_abv = ($_POST['wine-abv']);
    $wine_cheese = filterSpecialChar($_POST['wine-cheese']);
    $wine_link = verifiedLink(filterSpecialChar($_POST['wine-link']));

    $error_message = '';

    //valid name
    if (checkInputString($wine_name) == 'error!') {
        $error_message .= 'Invalid wine name length <br>';
    } elseif (validateStringAlphanumeric($wine_name) == 'error!') {
        $error_message .= 'Please use only letters and numbers for wine name <br>';
    }

    //valid year
    if (checkInputNumYear($wine_year) == 'error!') {
        $error_message .= 'Invalid wine year <br>';
    }

    //valid origin
    if (checkInputString($wine_origin) == 'error!') {
        $error_message .= 'Invalid origin of wine <br>';
    } elseif (validateStringAlphanumeric($wine_origin) == 'error!') {
        $error_message .= 'Please use only letters and numbers for wine origin <br>';
    }

    //valid profile
    if (checkInputString($wine_profile) == 'error!') {
        $error_message .= 'Invalid wine profile <br>';
    } elseif (validateStringAlphanumeric($wine_profile) == 'error!') {
        $error_message .= 'Please use only letters and numbers for wine profile <br>';
    }

    //valid body
    if (checkInputString($wine_body) == 'error!') {
        $error_message .= 'Invalid wine body type <br>';
    } elseif (validateStringAlphanumeric($wine_body) == 'error!') {
        $error_message .= 'Please only use letters and numbers for wine body <br>';
    }

    //valid abv
    if (checkInputNumAbv($wine_abv) == 'error!') {
        $error_message .= 'Invalid abv metric <br>';
    }

    //valid cheese
    if (checkInputString($wine_cheese) == 'error!') {
        $error_message .= 'Invalid cheese type <br>';
    } elseif (validateStringAlphanumeric($wine_cheese) == 'error!') {
        $error_message .= 'Please only use letters and numbers for cheers pairing <br>';
    }

    if ($error_message != '') {
        if (isset($_SESSION)) {
            $_SESSION['error_message'] = $error_message;
        }
        header('Location: add.php');
        exit;
    }

    //create db connections
    $db = connectDB();

    //call insertData function and pass inputs and pdo connection
    insertData($wine_name, $wine_year, $wine_origin, $wine_profile,
        $wine_body, $wine_abv, $wine_cheese, $wine_link, $db);

    header('Location: index.php');

}