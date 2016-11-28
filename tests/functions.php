<?php

require("../functions.php");

class blogTest extends PHPUnit_Framework_TestCase

{
    public function testHowLongIsTheFenceGood() {
        $fence = 2;
        $fence2 = howLongIsTheFence(01.23);
        $this->assertEquals($fence, $fence2);
    }

    public function testHowLongIsTheFenceBad() {
        $fence = 2;
        $fence2 = howLongIsTheFence(0);
        $this->assertNotEquals($fence, $fence2);
    }

    public function testHowLongIsTheFenceMal() {
        $fence = 2;
        $fence2 = howLongIsTheFence(['spoon', 'jar', 'jar', 'spoon']);
        $this->assertNotEquals($fence, $fence2);
    }

    public function testValidatorGood() {
        $fence1 = 3;
        $fence2 = validator(3, 9);
        $this->assertEquals($fence1, $fence2);
    }

    public function testValidatorBad() {
        $fence = 2;
        $fence2 = howLongIsTheFence(3,9);
        $this->assertNotEquals($fence, $fence2);
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testValidatorMal() {
        $fence1 = 2;
        $fence2 = validator(['spoon', 'jar', 'jar', 'spoon']);
        $this->assertEquals($fence1, $fence2);
    }

    public function testHowManyRailingsAndPostsGood() {
        $fence1 = 2;
        $fence2 = howManyRailingsAndPosts(3, 9);
        $this->assertEquals($fence1, $fence2);
    }

    public function testHowManyRailingsAndPostsBad() {
        $fence = 3;
        $fence2 = howManyRailingsAndPosts(3,9);
        $this->assertNotEquals($fence, $fence2);
    }

    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testHowManyRailingsAndPostsMal() {
        $fence1 = 2;
        $fence2 = howManyRailingsAndPosts(['spoon', 'jar', 'jar', 'spoon']);
        $this->assertEquals($fence1, $fence2);
    }

}

?>