<?php

declare(strict_types=1);

namespace PoP\PoP\Extensions\Symplify\MonorepoBuilder\ValueObject;

use Nette\Utils\Strings;
use Symplify\SmartFileSystem\SmartFileInfo;

final class CustomPackage
{
    /**
     * @var SmartFileInfo
     */
    private $rootDirectoryFileInfo;

    /**
     * @var string
     */
    private $shortName;

    /**
     * @var string
     */
    private $shortDirectory;

    public function __construct(
        private string $name,
        SmartFileInfo $composerJsonFileInfo
    ) {
        $this->shortName = (string) Strings::after($name, '/', -1);

        $this->rootDirectoryFileInfo = new SmartFileInfo($composerJsonFileInfo->getPath());

        $this->shortDirectory = (string) Strings::after($composerJsonFileInfo->getPath(), '/', -1);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function hasTests(): bool
    {
        $expectedTestsDirectory = $this->rootDirectoryFileInfo->getRealPath() . DIRECTORY_SEPARATOR . 'tests';
        return file_exists($expectedTestsDirectory);
    }

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function getShortDirectory(): string
    {
        return $this->shortDirectory;
    }

    public function getRelativePath(): string
    {
        return $this->rootDirectoryFileInfo->getRelativeFilePathFromCwd();
    }
}
