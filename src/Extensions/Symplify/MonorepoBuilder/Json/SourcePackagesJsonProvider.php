<?php

declare(strict_types=1);

namespace PoP\PoP\Extensions\Symplify\MonorepoBuilder\Json;

use Symplify\MonorepoBuilder\Package\PackageProvider;
use Symplify\MonorepoBuilder\ValueObject\Package;

final class SourcePackagesJsonProvider
{
    /**
     * @var PackageProvider
     */
    private $packageProvider;

    public function __construct(
        PackageProvider $packageProvider
    ) {
        $this->packageProvider = $packageProvider;
    }

    /**
     * Code paths are src/ and tests/ folders.
     * But not all packages have them, so check if these folders exist.
     * Since a Package already has function `hasTests`, and since every
     * package that has tests/ also has src/, then using this function
     * already does the job.
     * @return string[]
     */
    public function provideSourcePackages(): array
    {
        $packagesWithCode = array_values(array_filter(
            $this->packageProvider->provide(),
            function (Package $package): bool {
                return $package->hasTests();
            }
        ));
        return array_map(
            function (Package $package): string {
                return $package->getRelativePath();
            },
            $packagesWithCode
        );
    }
}
