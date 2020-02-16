<?php

/** Take the database assoc array and select the data required
 *
 * @param $db, takes the database
 * @return mixed, returns assoc array of required data
 */
function getWines($db) {
    $query = $db->prepare('SELECT `id`, `name`, `year`, `origin`, `profile`, `body`, `abv`, `cheese`, `link`, `img`, `hidden` FROM `wines`;');
    $query->execute();
    return $query->fetchAll();
}

function var_dump_pre($a) {
    echo '<pre>';
    var_dump($a);
    echo '</pre>';
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

/** Display each wine from assoc array if not set to hidden
 *
 * @param array $wines, takes an associated array
 * @return string, returns the html code that gets echo'ed out
 */
function displayWines(array $wines): string {
    $result = '';
    foreach ($wines as $wine)
    {
        if ($wine['hidden'] == 0) {

            $result .= '<article class=\'wine-item\'>';
            $result .= '<div class=\'hidden-hidden\'>' . $wine['hidden'] . '</div>';
            $result .= '<div class=\'wine-id hidden-hidden\'>' . $wine['id'] . '</div>';
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
            $result .= '<form method="post">';
            $result .= '<input type=\'hidden\' id=\'wine-id\' name=\'wine-id\' value=\'' . $wine['id'] . '\'>';
            $result .= '<input class=\'delete-wine-btn\' type=\'submit\' name=\'delete-wine\' value=\'Delete Wine\'>';
            $result .= '</form>';
            $result .= '</div>';
            $result .= '</article>';

        }
    }
    return $result;
}



/** Check the string input is greater than 0 and less than 250
 *
 * @param string $input, input from PDO $_POST element
 * @return string, return the input if passed, throw error if not
 */
function checkInputString(string $input): string {
    if (strlen($input) > 0 && strlen($input) < 100) {
        return $input;
    } else {
        return 'error!';
    }
}

/** Check the number input is between 1900 & 2020, number, transform to int
 *
 * @param $input, taken from $_POST year
 * @return int, return number if true, throw error if not
 */
function checkInputNumYear(string $input): string {
    $input_num = is_numeric($input) ? $input * 1 : $input = 'error!';
    if ($input_num > 1900 && $input_num < 2020) {
        return $input_num;
    } else {
        return 'error!';
    }
}

/** Check the number input is between 0 and 100 as its abv %
 *
 * @param $input, taken from $_POST abv
 * @return int, return number int if true, throw error if not
 */
function checkInputNumAbv(string $input): string {
    $input_num = is_numeric($input) ? $input * 1 : $input = 'error!';
    if ($input_num > 0 && $input_num < 100) {
        return $input_num;
    } else {
        return 'error!';
    }
}

/** function to trim and sanitize
 *
 * @param $input
 * @return mixed|string
 */
function filterSpecialChar($input) {
    $item_returned = trim(filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS));
    return $item_returned;
}

/** verify if link is valid url
 *
 * @param $input, link input
 * @return string, default link if not valid or link if valid
 */
function verifiedLink(string $input): string {
    filter_var($input, FILTER_SANITIZE_URL);
    if (filter_var($input, FILTER_VALIDATE_URL)) {
        return $input;
    } else {
        return 'https://www.novelwines.co.uk';
    }
}

/** validate input to make sure only alpha-numeric
 *  ^ means start with, \w means all alphanumeric and $ means ends with 0 or more times
 *
 * @param $string, takes the input of type="text"
 * @return string, returns if true and 'error!' if false
 */
function validateStringAlphanumeric(string $string): string {
    if (preg_match('/^\w/', $string) && preg_match('/\w$/', $string)) {
        return $string;
    } else {
        return 'error!';
    }
}


/** insert data into db
 *
 * @param $name
 * @param $year
 * @param $origin
 * @param $profile
 * @param $body
 * @param $abv
 * @param $cheese
 * @param $link
 * @param $db
 * @return mixed
 */
function insertData($name, $year, $origin, $profile, $body, $abv, $cheese, $link, $hidden, $db) {
    $query = $db->prepare('INSERT INTO `wines`(`name`, `year`, `origin`, `profile`, `body`, `abv`, `cheese`, `link`, `hidden`) 
VALUES (:name, :year, :origin, :profile, :body, :abv, :cheese, :link, :hidden);');
    $query->bindParam(':name', $name);
    $query->bindParam(':year', $year);
    $query->bindParam(':origin', $origin);
    $query->bindParam(':profile', $profile);
    $query->bindParam(':body', $body);
    $query->bindParam(':abv', $abv);
    $query->bindParam(':cheese', $cheese);
    $query->bindParam(':link', $link);
    $query->bindParam(':hidden', $hidden);
    return $query->execute();
}


function deleteWine($id, $db) {
    $query = $db->prepare('UPDATE `wines` SET `hidden` = \'1\' WHERE `id` = :id');
    $query->bindParam(':id', $id);
    return $query->execute();
}

















