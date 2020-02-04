<?php

function getWines($db)
{
    $query = $db->prepare();
    $query->execute();
    return $query->fetchAll();
}

function var_dumpPre($variabletoDump) {
    echo '<pre>';
    var_dump($variabletoDump);
    echo '</pre>';
}