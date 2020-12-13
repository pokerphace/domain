<?php
namespace Pokerphace\Domain;

class Number {
    public function __construct(
        private int|float $number
    ) {}
}