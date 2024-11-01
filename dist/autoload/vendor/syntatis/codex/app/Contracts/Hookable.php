<?php

declare (strict_types=1);
namespace SSFV\Codex\Contracts;

use SSFV\Codex\Foundation\Hooks\Hook;
interface Hookable
{
    /**
     * Add WordPress hooks to run.
     */
    public function hook(Hook $hook) : void;
}
