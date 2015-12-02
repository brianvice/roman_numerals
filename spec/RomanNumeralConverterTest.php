<?php namespace spec\interview;

use interview\RomanNumeralConverter;

/**
 * Class RomanNumeralConverterTest
 *
 * Roman Numerals are defined as follows:
 * 1 => I
 * 5 => V
 * 10 => X
 * 50 => L
 * 100 => C
 * 500 => D
 * 1000 => M
 *
 * Some more information: https://en.wikipedia.org/wiki/Roman_numerals
 *
 * @package spec\interview
 */

class RomanNumeralConverterTest extends \PHPUnit_Framework_TestCase
{

    /** @var RomanNumeralConverter */
    private $converter;

    public function setUp()
    {
        $this->converter = new RomanNumeralConverter;
    }

    /** @test */
    public function convertsOne()
    {
        $this->assertEquals('I', $this->converter->convert(1));
    }

    /** @test */
    public function convertsTwo()
    {
        $this->assertEquals('II', $this->converter->convert(2));
    }

    /** @test */
    public function convertsFour()
    {
        $this->assertEquals('IV', $this->converter->convert(4));
    }

    /** @test */
    public function convertsFive()
    {
        $this->assertEquals('V', $this->converter->convert(5));
    }

    /** @test */
    public function convertsEight()
    {
        $this->assertEquals('VIII', $this->converter->convert(8));
    }

    /** @test */
    public function convertsNine()
    {
        $this->assertEquals('IX', $this->converter->convert(9));
    }

    /** @test */
    public function convertsTen()
    {
        $this->assertEquals('X', $this->converter->convert(10));
    }

    /** @test */
    public function convertsEleven()
    {
        $this->assertEquals('XI', $this->converter->convert(11));
    }

    /** @test */
    public function convertsTwelve()
    {
        $this->assertEquals('XII', $this->converter->convert(12));
    }

    /** @test */
    public function convertsFourteen()
    {
        $this->assertEquals('XIV', $this->converter->convert(14));
    }

    /** @test */
    public function convertsFifteen()
    {
        $this->assertEquals('XV', $this->converter->convert(15));
    }

    /** @test */
    public function convertsNineteen()
    {
        $this->assertEquals('XIX', $this->converter->convert(19));
    }

    /** @test */
    public function convertsTwenty()
    {
        $this->assertEquals('XX', $this->converter->convert(20));
    }

    /** @test */
    public function convertsThirtyNine()
    {
        $this->assertEquals('XXXIX', $this->converter->convert(39));
    }

    /** @test */
    public function convertsForty()
    {
        $this->assertEquals('XL', $this->converter->convert(40));
    }

    /** @test */
    public function convertsFortyNine()
    {
        $this->assertEquals('XLIX', $this->converter->convert(49));
    }

    /** @test */
    public function convertsSixtyEight()
    {
        $this->assertEquals('LXVIII', $this->converter->convert(68));
    }

    /** @test */
    public function convertsNinetyNine()
    {
        $this->assertEquals('XCIX', $this->converter->convert(99));
    }

    /** @test */
    public function convertsOneHundred()
    {
        $this->assertEquals('C', $this->converter->convert(100));
    }

    /** @test */
    public function convertsNineHundredEighty()
    {
        $this->assertEquals('CMLXXX', $this->converter->convert(980));
    }

    /** @test */
    public function convertsNineHundredNinetyNine()
    {
        $this->assertEquals('CMXCIX', $this->converter->convert(999));
    }

    /** @test */
    public function convertsOneThousand()
    {
        $this->assertEquals('M', $this->converter->convert(1000));
    }

    /** @test */
    public function convertsFourThousandFiveHundredNinetyNine()
    {
        $this->assertEquals('MMMMDXCIX', $this->converter->convert(4599));
    }

    /** @test */
    public function convertsFourThousandNineHundredTwentySeven()
    {
        $this->assertEquals('MMMMCMXXVII', $this->converter->convert(4927));
    }
}
