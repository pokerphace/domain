<?php declare(strict_types=1);
namespace Pokerphace\Domain\Module\TechnicalInformation\Fetch;

interface Handler
{
    public function fetch(): ResponseModel;
}