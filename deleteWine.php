<?php

require_once 'connectDB.php';
require_once 'functions.php';

//if delete pressed, call delete function and return to index.php
if(isset($_POST['delete-wine'])) {

    connectDB();

    //deleteWine()

}

