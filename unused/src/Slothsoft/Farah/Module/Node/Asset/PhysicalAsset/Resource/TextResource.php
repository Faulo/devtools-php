<?php
declare(strict_types = 1);
namespace Slothsoft\Farah\Module\Node\Asset\PhysicalAsset\Resource;

use Slothsoft\Farah\Module\FarahUrl\FarahUrl;
use Slothsoft\Farah\Module\Results\ResultCatalog;
use Slothsoft\Farah\Module\Results\ResultInterface;

/**
 *
 * @author Daniel Schulz
 *        
 */
class TextResource extends ResourceBase
{

    protected function loadExecutable(FarahUrl $url): ResultInterface
    {
        return ResultCatalog::createTextFileResult($url, $this->toFile());
    }
}

