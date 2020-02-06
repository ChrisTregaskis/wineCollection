<?php

/** Take the database assoc array and select the data required
 *
 * @param $db, takes the database
 * @return mixed, returns assoc array of required data
 */
function getWines($db) {
    $query = $db->prepare('SELECT `id`, `name`, `year`, `origin`, `profile`, `body`, `abv`, `cheese`, `link`, `img` FROM `wines`;');
    $query->execute();
    return $query->fetchAll();
}

/** Make sure array keys exist
 *
 * @param array $wines, takes an associated array
 * @return bool|string, return true if all keys exist otherwise false.
 */
function keysExist(array $wines) : bool {
    $result = '';
    foreach ($wines as $wine)  {
        if (array_key_exists('name', $wine) &&
            (array_key_exists('year', $wine)) &&
            (array_key_exists('origin', $wine)) &&
            (array_key_exists('profile', $wine)) &&
            (array_key_exists('body', $wine)) &&
            (array_key_exists('abv', $wine)) &&
            (array_key_exists('cheese', $wine)) &&
            (array_key_exists('link', $wine)) &&
            (array_key_exists('img', $wine)))
        {
            $result = true;
        } else {
            return false;
        }
    }
    return $result;
}

/** Display each wine from assoc array
 *
 * @param array $wines, takes an associated array
 * @return string, returns the html code that gets echo'ed out
 */
function displayWines(array $wines): string {
    $result = '';
    foreach ($wines as $wine)
    {
        $result .= '<article class=\'wine-item\'>';
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

