<?php declare(strict_types=1);
namespace Pokerphace\Domain\Module\TechnicalInformation\Fetch;

interface TechnicalInformationFinder
{
    public function find(): TechnicalInformation;
}