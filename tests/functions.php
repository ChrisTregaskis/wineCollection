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

    //SUCCESS:


    //FAILURE:


    //MALFORMED:
    public function test_m_displayWines_r_typeError()
    {
        $this->expectException(TypeError::class);
        $input = 'test';
        $case = displayWines($input);
    }

}