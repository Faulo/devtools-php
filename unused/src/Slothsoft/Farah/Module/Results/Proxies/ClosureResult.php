<?php
declare(strict_types = 1);
namespace Slothsoft\Farah\Module\Results\Proxies;

use Slothsoft\Farah\Module\Results\ResultCatalog;
use Slothsoft\Farah\Module\Results\ResultInterface;
use Closure;

/**
 *
 * @author Daniel Schulz
 *        
 */
class ClosureResult extends ProxyResult
{

    private $closure;

    public function __construct(Closure $closure)
    {
        $this->closure = $closure;
    }

    protected function loadProxiedResult(): ResultInterface
    {
        $closure = $this->closure;
        return ResultCatalog::createFromMixed($this->getUrl(), $closure($this->createUrl()));
    }
}

