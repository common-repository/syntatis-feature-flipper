<?php

declare (strict_types=1);
namespace SSFV\Codex\Contracts;

use SSFV\Psr\Container\ContainerInterface;
interface Deactivatable
{
    /**
     * Run actions when the plugin is deactivated.
     */
    public function deactivate(ContainerInterface $container) : void;
}
