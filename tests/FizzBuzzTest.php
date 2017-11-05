<?php

namespace Vema\Tests\FizzBuzz;

use Vema\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider numberRangeProvider
     *
     * @param int $value
     */
    public function test(int $value)
    {
        if ($this->isFizzBuzz($value)) {
            $this->assertTrue(FizzBuzz::isFizz($value));
            $this->assertTrue(FizzBuzz::isBuzz($value));
            $this->assertTrue(FizzBuzz::isFizzBuzz($value));
        }
        elseif ($this->isFizz($value)) {
            $this->assertTrue(FizzBuzz::isFizz($value));
            $this->assertFalse(FizzBuzz::isBuzz($value));
            $this->assertFalse(FizzBuzz::isFizzBuzz($value));
        }
        elseif ($this->isBuzz($value)) {
            $this->assertFalse(FizzBuzz::isFizz($value));
            $this->assertTrue(FizzBuzz::isBuzz($value));
            $this->assertFalse(FizzBuzz::isFizzBuzz($value));
        }
        else {
            $this->assertFalse(FizzBuzz::isFizz($value));
            $this->assertFalse(FizzBuzz::isBuzz($value));
            $this->assertFalse(FizzBuzz::isFizzBuzz($value));
        }
    }

    /**
     * @dataProvider numberRangeProvider
     *
     * @param int $value
     */
    public function testCallback(int $value)
    {
        $fizzBuzz = new FizzBuzz();
        $fizzBuzz->setStart($value);
        $fizzBuzz->setEnd($value);

        if ($this->isFizzBuzz($value)) {
            $fizzBuzz->onFizz(function (int $value) { $this->assertTrue(true); });
            $fizzBuzz->onBuzz(function (int $value) { $this->assertTrue(true); });
            $fizzBuzz->onFizzBuzz(function (int $value) { $this->assertTrue(true); });
            $fizzBuzz->onOther(function (int $value) { $this->assertTrue(false); });
        }
        elseif ($this->isFizz($value)) {
            $fizzBuzz->onFizz(function (int $value) { $this->assertTrue(true); });
            $fizzBuzz->onBuzz(function (int $value) { $this->assertTrue(false); });
            $fizzBuzz->onFizzBuzz(function (int $value) { $this->assertTrue(false); });
            $fizzBuzz->onOther(function (int $value) { $this->assertTrue(false); });
        }
        elseif ($this->isBuzz($value)) {
            $fizzBuzz->onFizz(function (int $value) { $this->assertTrue(false); });
            $fizzBuzz->onBuzz(function (int $value) { $this->assertTrue(true); });
            $fizzBuzz->onFizzBuzz(function (int $value) { $this->assertTrue(false); });
            $fizzBuzz->onOther(function (int $value) { $this->assertTrue(false); });
        }
        else {
            $fizzBuzz->onFizz(function (int $value) { $this->assertTrue(false); });
            $fizzBuzz->onBuzz(function (int $value) { $this->assertTrue(false); });
            $fizzBuzz->onFizzBuzz(function (int $value) { $this->assertTrue(false); });
            $fizzBuzz->onOther(function (int $value) { $this->assertTrue(true); });
        }

        $fizzBuzz->run();
    }

    public function numberRangeProvider()
    {
        return array_map(
            function(int $value) { return [$value]; },
            range(1, 100)
        );
    }

    public function isFizz(int $value)
    {
        return in_array(
            $value,
            [3, 6, 9, 12, 15, 18, 21, 24, 27, 30, 33, 36, 39, 42, 45, 48, 51, 54, 57, 60, 63, 66, 69, 72, 75, 78, 81, 84, 87, 90, 93, 96, 99],
            true
        );
    }

    public function isBuzz(int $value)
    {
        return in_array(
            $value,
            [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100],
            true
        );
    }

    public function isFizzBuzz(int $value)
    {
        return $this->isFizz($value) && $this->isBuzz($value);
    }
}
