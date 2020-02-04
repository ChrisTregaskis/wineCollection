<?php

function getWines($db)
{
    $query = $db->prepare('SELECT `id`, `name`, `year`, `origin`, `profile`, `body`, `abv`, `cheese`, `link`, `img` FROM `wines`;');
    $query->execute();
    return $query->fetchAll();
}

function displayWines(array $wines): string
{
    if (!array_key_exists('name', $wines) ||
       (!array_key_exists('year', $wines)) ||
       (!array_key_exists('origin', $wines)) ||
       (!array_key_exists('profile', $wines)) ||
       (!array_key_exists('body', $wines)) ||
       (!array_key_exists('abv', $wines)) ||
       (!array_key_exists('cheese', $wines)) ||
       (!array_key_exists('link', $wines)) ||
       (!array_key_exists('img', $wines)))
    {
        return 'error! array keys missing from displayWines function';
    }


}