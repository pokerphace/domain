<?php declare(strict_types=1);
namespace UnitTest\Module\TechnicalInformation\Fetch;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Pokerphace\Domain\Module\TechnicalInformation\Fetch\HandlerImplementation;
use Pokerphace\Domain\Module\TechnicalInformation\Fetch\ResponseModel;
use Pokerphace\Domain\Module\TechnicalInformation\Fetch\TechnicalInformation;
use Pokerphace\Domain\Module\TechnicalInformation\Fetch\TechnicalInformationFinder;

class HandlerImplementationTest extends TestCase
{
    private MockObject|TechnicalInformationFinder $technicalInformationFinder;

    private HandlerImplementation $handler;

    protected function setUp(): void
    {
        $this->technicalInformationFinder = $this->getTechnicalInformationFinderMock();

        $this->handler = new HandlerImplementation($this->technicalInformationFinder);
    }

    public function testFetch(): void
    {
        $technicalInformation = new TechnicalInformation(
            'Project X',
            'Description X',
            '1.0.0',
            '8.0.0',
            'Slim',
            '5.0.0',
            '127.0.0.1'
        );

        $this->technicalInformationFinder
            ->expects($this->once())
            ->method('find')
            ->willReturn($technicalInformation);

        $expectedResponse = new ResponseModel($technicalInformation);
        $response = $this->handler->fetch();

        $this->assertInstanceOf(ResponseModel::class, $response);
        $this->assertEquals($expectedResponse, $response);
    }

    private function getTechnicalInformationFinderMock(): MockObject|TechnicalInformationFinder
    {
        return $this->getMockBuilder(TechnicalInformationFinder::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['find'])
            ->getMock();
    }
}