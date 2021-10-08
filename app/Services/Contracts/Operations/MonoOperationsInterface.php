<?php
namespace App\Services\Contracts\Operations;
use App\Services\Contracts\Types\MonoInterface;
use App\Services\Utils\Mono;

interface MonoOperationsInterface{
    public static function negative(MonoInterface $mono): Mono;
    public static function derivative(MonoInterface $mono): Mono;
    public static function multiplication(MonoInterface $firstMono, MonoInterface $secondMono): Mono;
}