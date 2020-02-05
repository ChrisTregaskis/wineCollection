<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class Stacktests extends TestCase
{
    //SUCCESS:
    public function test_s_displayWines_r_str()
    {
        $expected = 150;
        $input = 150;
        $case = displayWines($input);
        $this->assertEquals($expected, $case);
    }
}