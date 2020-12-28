<?php declare(strict_types=1);
namespace Pokerphace\Domain\Module\TechnicalInformation\Fetch;

class HandlerImplementation implements Handler
{
    private TechnicalInformationFinder $technicalInformationFinder;

    public function __construct(TechnicalInformationFinder $technicalInformationFinder)
    {
        $this->technicalInformationFinder = $technicalInformationFinder;
    }

    public function fetch(): ResponseModel
    {
        return new ResponseModel($this->technicalInformationFinder->find());
    }
}