<?php

use PHPUnit\Framework\TestCase;
use Verso\App\FizzBuzz;

class FizzBuzzOperateTest extends TestCase {
    public function testValidRangeReturnsFizzForMultiplesOfThree() 
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(['Fizz'],  $fizzBuzz->operate(9, 9));
    }

    public function testValidRangeReturnsBuzzForMultiplesOfFive() 
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(['Buzz'],  $fizzBuzz->operate(10, 10));
    }

    public function testValidRangeReturnsFizzBuzzForMultiplesOfThreeAndFive() 
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(['FizzBuzz'], $fizzBuzz->operate(30, 30));
    }

    public function testValidRangeReturnsNumbersIfNotDivisibleByThreeOrFive() 
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals(['14'], $fizzBuzz->operate(14, 14));
    }

    public function testInvalidRangeThrowExceptionIfStartIsZero()
    {
        $fizzBuzz = new FizzBuzz();
        $this->expectException(\Exception::class);
        $fizzBuzz->operate(0, 14);
    }
    
    public function testInvalidRangeThrowExceptionIfStartIsNegative()
    {
        $fizzBuzz = new FizzBuzz();
        $this->expectException(\Exception::class);
        $fizzBuzz->operate(-1, 14);
    }

    public function testInvalidRangeThrowExceptionIfEndIsZero()
    {
        $fizzBuzz = new FizzBuzz();
        $this->expectException(\Exception::class);
        $fizzBuzz->operate(2, 0);
    }

    public function testInvalidRangeThrowExceptionIfEndIsNegative()
    {
        $fizzBuzz = new FizzBuzz();
        $this->expectException(\Exception::class);
        $fizzBuzz->operate(2, -1);
    }

    public function testInvalidRangeThrowExceptionIfStartIsGreaterThanEnd()
    {
        $fizzBuzz = new FizzBuzz();
        $this->expectException(\Exception::class);
        $fizzBuzz->operate(90, 89);
    }
}
