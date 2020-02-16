<?php

require_once 'connectDB.php';
require_once 'functions.php';

session_start();

//if delete pressed, call delete function and return to index.php
if(isset($_POST['delete-wine'])) {

    $wine_id = $_POST['wine-id'];

    //if id = 1 - 4, throw alert and do not run delete function
    $error_message_delete = '';

    if($wine_id == 1 || $wine_id == 2 || $wine_id == 3 || $wine_id == 4) {
        $error_message_delete .= 'The first 4 wines are examples and cannot be deleted, please select another to delete. <br>';
    }

    if ($error_message_delete != '') {
        if (isset($_SESSION)) {
            $_SESSION['error_message_delete'] = $error_message_delete;
        }
        header('Location: index.php');
        exit;
    }

    $db = connectDB();

    deleteWine($wine_id, $db);

    header('Location: index.php');

}