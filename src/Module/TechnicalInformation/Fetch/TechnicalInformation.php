<?php declare(strict_types=1);
namespace Pokerphace\Domain\Module\TechnicalInformation\Fetch;

class TechnicalInformation
{
    private string $projectName;

    private string $projectDescription;

    private string $projectVersion;

    private string $phpVersion;

    private string $frameworkName;

    private string $frameworkVersion;

    private string $serverIp;

    public function __construct(
        string $projectName,
        string $projectDescription,
        string $projectVersion,
        string $phpVersion,
        string $frameworkName,
        string $frameworkVersion,
        string $serverIp
    ) {
        $this->projectName = $projectName;
        $this->projectDescription = $projectDescription;
        $this->projectVersion = $projectVersion;
        $this->phpVersion = $phpVersion;
        $this->frameworkName = $frameworkName;
        $this->frameworkVersion = $frameworkVersion;
        $this->serverIp = $serverIp;
    }

    public function getProjectName(): string
    {
        return $this->projectName;
    }

    public function getProjectDescription(): string
    {
        return $this->projectDescription;
    }

    public function getProjectVersion(): string
    {
        return $this->projectVersion;
    }

    public function getPhpVersion(): string
    {
        return $this->phpVersion;
    }

    public function getFrameworkName(): string
    {
        return $this->frameworkName;
    }

    public function getFrameworkVersion(): string
    {
        return $this->frameworkVersion;
    }

    public function getServerIp(): string
    {
        return $this->serverIp;
    }
}