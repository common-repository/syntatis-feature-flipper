<?php

declare (strict_types=1);
namespace SSFV\Codex\Contracts;

use SSFV\Psr\Container\ContainerInterface;
interface Extendable
{
    /**
     * Provide the plugin's feature to instantiate.
     *
     * @return iterable<object>
     */
    public function getInstances(ContainerInterface $container) : iterable;
}
