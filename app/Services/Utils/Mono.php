<?php

namespace App\Services\Utils;
use App\Services\Contracts\Types\MonoInterface;
use App\Services\Contracts\Shared\Stringable;
use JsonSerializable;

class Mono implements MonoInterface, Stringable, JsonSerializable
{
    private float $coffecent;
    private int $power;

    public function __construct($coffecent, $power)
    {
        $this->coffecent = $coffecent;
        $this->power = $power;
    }

    public function __toString()
    {
        if ($this->power > 0 || $this->coffecent != 0) {
            if ($this->power == 1) {
                if ($this->coffecent > 0) {
                    return "+$this->coffecent" . "x";
                } else {
                    return "$this->coffecent" . "x";
                }
            } elseif ($this->power == 0) {
                if ($this->coffecent > 0) {
                    return "+$this->coffecent";
                } else {
                    return "$this->coffecent";
                }
            } else {
                if ($this->coffecent > 0) {
                    return "+$this->coffecent" . "x^" . "$this->power";
                } else {
                    return "$this->coffecent" . "x^" . "$this->power";
                }
            }
        }
        return "";
    }

    public function getPower(): int
    {
        return $this->power;
    }

    public function getCoffecent(): float
    {
        return $this->coffecent;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
