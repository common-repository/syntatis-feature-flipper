<?php

declare (strict_types=1);
namespace SSFV\Codex\Contracts;

use SSFV\Psr\Container\ContainerInterface;
interface Activatable
{
    /**
     * Run actions when the plugin is activated.
     */
    public function activate(ContainerInterface $container) : void;
}
