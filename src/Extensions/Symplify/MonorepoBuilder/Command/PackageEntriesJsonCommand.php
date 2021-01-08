<?php

declare(strict_types=1);

namespace PoP\PoP\Extensions\Symplify\MonorepoBuilder\Command;

use Nette\Utils\Json;
use PoP\PoP\Extensions\Symplify\MonorepoBuilder\Json\PackageEntriesJsonProvider;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symplify\PackageBuilder\Console\Command\AbstractSymplifyCommand;
use Symplify\PackageBuilder\Console\ShellCode;

final class PackageEntriesJsonCommand extends AbstractSymplifyCommand
{
    private PackageEntriesJsonProvider $packageEntriesJsonProvider;

    public function __construct(PackageEntriesJsonProvider $packageEntriesJsonProvider)
    {
        $this->packageEntriesJsonProvider = $packageEntriesJsonProvider;

        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setDescription('Provides package entries in json format. Useful for GitHub Actions Workflow');

        // Another change to test
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $packageEntries = $this->packageEntriesJsonProvider->providePackageEntries();

        // must be without spaces, otherwise it breaks GitHub Actions json
        $json = Json::encode($packageEntries);
        $this->symfonyStyle->writeln($json);

        return ShellCode::SUCCESS;
    }
}
