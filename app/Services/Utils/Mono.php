<?php

namespace App\Services\Utils;
use App\Services\Contracts\Types\MonoInterface;
use App\Services\Contracts\Shared\Stringable;
use JsonSerializable;

class Mono implements MonoInterface, Stringable, JsonSerializable
{
    private float $coefficient;
    private int $power;

    public function __construct($coefficient, $power)
    {
        $this->coefficient = $coefficient;
        $this->power = $power;
    }

    // public function __toString()
    // {
    //     if ($this->power > 0 || $this->coffecent != 0) {
    //         if ($this->power == 1) {
    //             if ($this->coffecent > 0) {
    //                 return "+$this->coffecent" . "x";
    //             } else {
    //                 return "$this->coffecent" . "x";
    //             }
    //         } elseif ($this->power == 0) {
    //             if ($this->coffecent > 0) {
    //                 return "+$this->coffecent";
    //             } else {
    //                 return "$this->coffecent";
    //             }
    //         } else {
    //             if ($this->coffecent > 0) {
    //                 return "+$this->coffecent" . "x^" . "$this->power";
    //             } else {
    //                 return "$this->coffecent" . "x^" . "$this->power";
    //             }
    //         }
    //     }
    //     return "";
    // }

    public function __toString() :string 
    {
        $coefficient = $this->coefficient;
        $power = $this->power;
        $toString = '';

        if ($coefficient == 1) {
            $toString .= '+';
            if($power == 0){
                $toString .= '1';
            }else if ($power == 1) {
                $toString .= 'x';
            } elseif ($power > 1) {
                $toString .= 'x^' . "$power";
            }
        } elseif ($coefficient == -1) {
            $toString .= '-';
            if($power == 0){
                $toString .= 1;
            }else if ($power == 1) {
                $toString .= 'x';
            } elseif ($power > 1) {
                $toString .= 'x^' . "$power";
            }
        } elseif ($coefficient < 0) {
            $toString .= "$coefficient";
            if ($power == 1) {
                $toString .= 'x';
            } elseif ($power > 1) {
                $toString .= 'x^' . "$power";
            }
        } elseif ($coefficient > 0) {
            $toString .= '+' . "$coefficient";
            if ($power == 1) {
                $toString .= 'x';
            } elseif ($power > 1) {
                $toString .= 'x^' . "$power";
            }
        }

        return $toString;
    }

    public function getPower(): int
    {
        return $this->power;
    }

    public function getCoefficient(): float
    {
        return $this->coefficient;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
