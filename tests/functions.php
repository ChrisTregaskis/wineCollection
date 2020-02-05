<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Stacktests extends TestCase
{
    //// ----- keyExist -----////

    //SUCCESS: return true if key names exist
    public function test_s_keyExist_r_true()
    {
        $expected = true;
        $input = [["name"=> "Babylonstoren Nebukadnesar", "year"=> "2017", "origin"=> "South Africa", "profile"=> "Dry red wine", "body"=> "Full Bodied", "abv"=> "14.0", "cheese"=> "Pont l'Eveque soft", "link"=> "https://www.novelwines.co.uk/products/babylonstoren-nebukadnesar-south-african-red?_pos=2&_sid=becdb1abf&_ss=r", "img"=> "imgs/BABYLONSTOREN_Nebukadnesar_x700.jpg"]];
        $case = keysExist($input);
        $this->assertEquals($expected, $case);
    }

    //FAILURE: return false meaning key does not exist
    public function test_f_keyExist_r_false()
    {
        $expected = false;
        $input = [[]];
        $case = keysExist($input);
        $this->assertEquals($expected, $case);
    }

    //FAILURE: return false if one key missing or incorrect (first key "test" should be "name")
    public function test_f_keyExist_r_false_2()
    {
        $expected = false;
        $input = [["test"=> "Babylonstoren Nebukadnesar", "year"=> "2017", "origin"=> "South Africa", "profile"=> "Dry red wine", "body"=> "Full Bodied", "abv"=> "14.0", "cheese"=> "Pont l'Eveque soft", "link"=> "https://www.novelwines.co.uk/products/babylonstoren-nebukadnesar-south-african-red?_pos=2&_sid=becdb1abf&_ss=r", "img"=> "imgs/BABYLONSTOREN_Nebukadnesar_x700.jpg"]];
        $case = keysExist($input);
        $this->assertEquals($expected, $case);
    }

    //MALFORMED: return typeError if an array not passed
    public function test_m_keyExist_r_typeError()
    {
        $this->expectException(TypeError::class);
        $input = 'test';
        $case = keysExist($input);
    }


    //// ----- displayWines -----////


    //SUCCESS: return string with html elements if given assoc array with required keys
    public function test_s_displayWines_r_str()
    {
        $expected = "<article class='wine-item'><div class='wine-img' style='background-image: url(Resources/imgs/BABYLONSTOREN_Nebukadnesar_x700.jpg)'></div><div class=\"content\"><h3>Babylonstoren Nebukadnesar</h3><ul><li><span>Year: </span>2017</li><li><span>Origin: </span>South Africa</li><li><span>Profile: </span>Dry red wine</li><li><span>Body: </span>Full Bodied</li><li><span>ABV: </span>14.0</li><li><span>Cheese: </span>Pont l'Eveque soft</li></ul><div class='view-more-link'><a href='https://www.novelwines.co.uk/products/babylonstoren-nebukadnesar-south-african-red?_pos=2&_sid=becdb1abf&_ss=r'>View More</a></div></div></article>";
        $input1 = [["name"=> "Babylonstoren Nebukadnesar", "year"=> "2017", "origin"=> "South Africa", "profile"=> "Dry red wine", "body"=> "Full Bodied", "abv"=> "14.0", "cheese"=> "Pont l'Eveque soft", "link"=> "https://www.novelwines.co.uk/products/babylonstoren-nebukadnesar-south-african-red?_pos=2&_sid=becdb1abf&_ss=r", "img"=> "imgs/BABYLONSTOREN_Nebukadnesar_x700.jpg"]];
        $input2 = true;
        $case = displayWines($input1, $input2);
        $this->assertEquals($expected, $case);
    }

    //FAILURE: return success string even if extra keys passed (test at end, "test" => "test")
    public function test_f_displayWines_r_str()
    {
        $expected = "<article class='wine-item'><div class='wine-img' style='background-image: url(Resources/imgs/BABYLONSTOREN_Nebukadnesar_x700.jpg)'></div><div class=\"content\"><h3>Babylonstoren Nebukadnesar</h3><ul><li><span>Year: </span>2017</li><li><span>Origin: </span>South Africa</li><li><span>Profile: </span>Dry red wine</li><li><span>Body: </span>Full Bodied</li><li><span>ABV: </span>14.0</li><li><span>Cheese: </span>Pont l'Eveque soft</li></ul><div class='view-more-link'><a href='https://www.novelwines.co.uk/products/babylonstoren-nebukadnesar-south-african-red?_pos=2&_sid=becdb1abf&_ss=r'>View More</a></div></div></article>";
        $input1 = [["name"=> "Babylonstoren Nebukadnesar", "year"=> "2017", "origin"=> "South Africa", "profile"=> "Dry red wine", "body"=> "Full Bodied", "abv"=> "14.0", "cheese"=> "Pont l'Eveque soft", "link"=> "https://www.novelwines.co.uk/products/babylonstoren-nebukadnesar-south-african-red?_pos=2&_sid=becdb1abf&_ss=r", "img"=> "imgs/BABYLONSTOREN_Nebukadnesar_x700.jpg", "test"=> "test"]];
        $input2 = true;
        $case = displayWines($input1, $input2);
        $this->assertEquals($expected, $case);
    }

    //MALFORMED: return typeError if not an array is passed
    public function test_m_displayWines_r_typeError()
    {
        $this->expectException(TypeError::class);
        $input1 = 'test';
        $input2 = true;
        $case = displayWines($input1, $input2);
    }

}