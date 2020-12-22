<?php declare(strict_types=1);
namespace Pokerphace\Domain\Module\TechnicalInformation\Fetch;

class ResponseModel
{
    protected TechnicalInformation $technicalInformation;

    public function __construct(TechnicalInformation $technicalInformation)
    {
        $this->technicalInformation = $technicalInformation;
    }

    public function getTechnicalInformation(): TechnicalInformation
    {
        return $this->technicalInformation;
    }
}