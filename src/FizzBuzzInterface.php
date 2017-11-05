<?php declare(strict_types = 1);

namespace Vema\FizzBuzz;

interface FizzBuzzInterface
{
    public function getStart(): int;

    public function setStart(int $start): void;

    public function getEnd(): int;

    public function setEnd(int $end): void;

    public function onFizz(callable $handler): void;

    public function onBuzz(callable $handler): void;

    public function onFizzBuzz(callable $handler): void;

    public function onOther(callable $handler): void;

    public function run(): void;

    public static function isFizz(int $value): bool;

    public static function isBuzz(int $value): bool;

    public static function isFizzBuzz(int $value): bool;
}