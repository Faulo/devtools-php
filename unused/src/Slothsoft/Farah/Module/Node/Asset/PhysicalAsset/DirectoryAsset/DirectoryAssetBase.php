<?php
declare(strict_types = 1);
namespace Slothsoft\Farah\Module\Node\Asset\PhysicalAsset\DirectoryAsset;

use Slothsoft\Farah\Module\Node\Asset\PhysicalAsset\PhysicalAssetBase;
use Slothsoft\Farah\Module\PathResolvers\PathResolverCatalog;
use Slothsoft\Farah\Module\PathResolvers\PathResolverInterface;

abstract class DirectoryAssetBase extends PhysicalAssetBase implements DirectoryAssetInterface
{

    protected function loadPathResolver(): PathResolverInterface
    {
        $map = [];
        $map['/'] = $this;
        foreach ($this->getAssetChildren() as $asset) {
            $name = $asset->getName();
            if ($name !== '/') {
                $map["/$name"] = $asset;
            }
        }
        return PathResolverCatalog::createMapPathResolver($this, $map);
    }
}

