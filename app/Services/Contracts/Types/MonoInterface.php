<?php
namespace App\Services\Contracts\Types;

interface MonoInterface{
    public function getPower(): int;
    public function getCoffecent(): float;
}