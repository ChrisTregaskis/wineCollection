<?php

function getWines($db)
{
    $query = $db->prepare('SELECT `id`, `name`, `year`, `origin`, `profile`, `body`, `abv`, `cheese`, `link`, `img` FROM `wines`;');
    $query->execute();
    return $query->fetchAll();
}

function var_dump_pre($a) {
    echo '<pre>';
    var_dump($a);
    echo '</pre>';
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

    $result = '';
    foreach ($wines as $wine)
    {
        $result = '<article class=\'wine-item\'>';
        $result .= '<div class=\'wine-img\' style=\'background-image: url(' . 'Resources/' . $wine['img'] . ')\'></div>';
        $result .= '<div class="content">';
        $result .= '<h3>' . $wine['name'] . '</h3>';
        $result .= '<ul>';
        $result .= '<li><span>Year: </span>' . $wine['year'] . '</li>';
        $result .= '<li><span>Origin: </span>' . $wine['origin'] . '</li>';
        $result .= '<li><span>Profile: </span>' . $wine['profile'] . '</li>';
        $result .= '<li><span>Body: </span>' . $wine['body'] . '</li>';
        $result .= '<li><span>ABV: </span>' . $wine['abv'] . '</li>';
        $result .= '<li><span>Cheese: </span>' . $wine['cheese'] . '</li>';
        $result .= '</ul>';
        $result .= '<div class=\'view-more-link\'><a href=\'' . $wine['link'] . '\'>View More</a></div>';
        $result .= '</div>';
        $result .= '</article>';
    }
    return $result;
}








