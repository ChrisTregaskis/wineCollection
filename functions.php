<?php

function getWines($db)
{
    $query = $db->prepare('SELECT `id`, `name`, `year`, `origin`, `profile`, `body`, `abv`, `cheese`, `link`, `img` FROM `wines`;');
    $query->execute();
    return $query->fetchAll();
}

function var_dumpPre($variabletoDump) {
    echo '<pre>';
    var_dump($variabletoDump);
    echo '</pre>';
}