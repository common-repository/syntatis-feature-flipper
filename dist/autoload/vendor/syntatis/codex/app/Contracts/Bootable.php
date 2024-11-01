<?php

declare (strict_types=1);
namespace SSFV\Codex\Contracts;

interface Bootable
{
    public function boot() : void;
}
