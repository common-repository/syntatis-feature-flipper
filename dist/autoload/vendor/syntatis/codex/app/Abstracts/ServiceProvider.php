<?php

declare (strict_types=1);
namespace SSFV\Codex\Abstracts;

use SSFV\Pimple\Container;
abstract class ServiceProvider
{
    protected Container $container;
    public final function __construct(Container $container)
    {
        $this->container = $container;
    }
}
