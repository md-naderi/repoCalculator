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
            $mono->getCoffecent() * -1,
            $mono->getPower()
        );
    }

    public static function derivative(MonoInterface $mono): Mono
    {
        return new Mono(
            $mono->getCoffecent() * $mono->getPower(),
            $mono->getPower() - 1
        );
    }

    public static function multiplication(MonoInterface $firstMono, MonoInterface $secondMono): Mono
    {
        return new Mono(
            $firstMono->getCoffecent() * $secondMono->getCoffecent(),
            $firstMono->getPower() + $secondMono->getPower()
        );
    }
}
