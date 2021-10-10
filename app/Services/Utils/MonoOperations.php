<?php

namespace App\Services\Utils;

use App\Services\Contracts\Operations\MonoOperationsInterface;
use App\Services\Contracts\Types\MonoInterface;
use App\Services\Utils\Mono;

class MonoOperations implements MonoOperationsInterface
{
    public static function negative(MonoInterface $mono): Mono
    {
        return new Mono(
            $mono->getCoefficient() * -1,
            $mono->getPower()
        );
    }

    public static function derivative(MonoInterface $mono): Mono
    {
        return new Mono(
            $mono->getCoefficient() * $mono->getPower(),
            $mono->getPower() - 1
        );
    }

    public static function multiplication(MonoInterface $firstMono, MonoInterface $secondMono): Mono
    {
        return new Mono(
            $firstMono->getCoefficient() * $secondMono->getCoefficient(),
            $firstMono->getPower() + $secondMono->getPower()
        );
    }
}
