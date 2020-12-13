<?php
namespace Pokerphace\Domain;

class Number {
    public function __construct(
        private int|float $number
    ) {}

    public function getNumber(): int|float 
    {
        return $this->number;
    }
}