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
    public function test_f_keyExist_r_false_if_incorrect_key()
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
    public function test_s_displayWines_r_html_str()
    {
        $expected = "<article class='wine-item'><div class='wine-img' style='background-image: url(Resources/imgs/BABYLONSTOREN_Nebukadnesar_x700.jpg)'></div><div class=\"content\"><h3>Babylonstoren Nebukadnesar</h3><ul><li><span>Year: </span>2017</li><li><span>Origin: </span>South Africa</li><li><span>Profile: </span>Dry red wine</li><li><span>Body: </span>Full Bodied</li><li><span>ABV: </span>14.0</li><li><span>Cheese: </span>Pont l'Eveque soft</li></ul><div class='view-more-link'><a href='https://www.novelwines.co.uk/products/babylonstoren-nebukadnesar-south-african-red?_pos=2&_sid=becdb1abf&_ss=r'>View More</a></div></div></article>";
        $input1 = [["name"=> "Babylonstoren Nebukadnesar", "year"=> "2017", "origin"=> "South Africa", "profile"=> "Dry red wine", "body"=> "Full Bodied", "abv"=> "14.0", "cheese"=> "Pont l'Eveque soft", "link"=> "https://www.novelwines.co.uk/products/babylonstoren-nebukadnesar-south-african-red?_pos=2&_sid=becdb1abf&_ss=r", "img"=> "imgs/BABYLONSTOREN_Nebukadnesar_x700.jpg"]];
        $input2 = true;
        $case = displayWines($input1, $input2);
        $this->assertEquals($expected, $case);
    }

    //FAILURE: return success string even if extra keys passed (test at end, "test" => "test")
    public function test_f_displayWines_r_html_str()
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


    //// ----- checkInputString -----////

    //SUCCESS: return a string if input is desired length
    public function test_s_checkInputString_r_str()
    {
        $expected = 'string';
        $input = 'string';
        $case = checkInputString($input);
        $this->assertEquals($expected, $case);
    }

    //FAILURE: return 'error!' if string exceeds max input
    public function test_f_checkInputString_r_str()
    {
        $expected = 'error!';
        $input = 'duqshoqymjfjfkrlylqszzodwlxofvomqprnmdzwgctjozebdzjnrfzydextpoacomhympgfalkrzvmdvnggdwtbcanyqryyqkmiwsihdblycqsfwtptmdmbggsqgbjaowbqvuqiwevjfvcgppirgliqvfrbimlaaiinqjrxzwifzdahellrnxuujlpsvifxlocbgfyafcbjnthxpnalexdwemcsijkiddllkvzcnblbqeknbjtdimukhtlopvpyystwcscgq';
        $case = checkInputString($input);
        $this->assertEquals($expected, $case);
    }

    //MALFORMED:
    public function test_m_checkInputString_r_typeError()
    {
        $this->expectException(TypeError::class);
        $input1 = ['test'];
        $case = checkInputString($input1);
    }


    //// ----- checkInputNumYear -----////

    //SUCCESS: return the input if between 1900 - 2020
    public function test_s_checkInputNumYear_r_str()
    {
        $expected = 2012;
        $input = '2012';
        $case = checkInputNumYear($input);
        $this->assertEquals($expected, $case);
    }

    //FAILURE: return 'error!' if year falls outside of 1900 - 2020
    public function test_f_checkInputNumYear_r_str()
    {
        $expected = 'error!';
        $input = 1899;
        $case = checkInputNumYear($input);
        $this->assertEquals($expected, $case);
    }

    //MALFORMED: return typeError if incorrect
    public function test_m_checkInputNumYear_r_typeError()
    {
        $this->expectException(TypeError::class);
        $input1 = ['test'];
        $case = checkInputNumYear($input1);
    }


    //// ----- checkInputNumAbv -----////

    //SUCCESS: return the input if between 0 - 100
    public function test_s_checkInputNumAbv_r_str()
    {
        $expected = 3;
        $input = '3';
        $case = checkInputNumAbv($input);
        $this->assertEquals($expected, $case);
    }

    //FAILURE: return 'error!' if year falls outside of 1900 - 2020
    public function test_f_checkInputNumAbv_r_str()
    {
        $expected = 'error!';
        $input = 101;
        $case = checkInputNumAbv($input);
        $this->assertEquals($expected, $case);
    }

    //MALFORMED: return typeError
    public function test_m_checkInputNumAbv_r_typeError()
    {
        $this->expectException(TypeError::class);
        $input1 = ['test'];
        $case = checkInputNumAbv($input1);
    }


    //// ----- verifiedLink -----////

    //SUCCESS: throw url if url valid
    public function test_s_verifiedLink_r_str()
    {
        $expected = 'https://www.google.co.uk/';
        $input = 'https://www.google.co.uk/';
        $case = verifiedLink($input);
        $this->assertEquals($expected, $case);
    }

    //FAILURE:
    public function test_f_verifiedLink_r_str()
    {
        $expected = 'https://www.novelwines.co.uk/';
        $input = 101;
        $case = verifiedLink($input);
        $this->assertEquals($expected, $case);
    }

    //MALFORMED:
    public function test_m_verifiedLink_r_typeError()
    {
        $this->expectException(TypeError::class);
        $input1 = ['test'];
        $case = verifiedLink($input1);
    }


}