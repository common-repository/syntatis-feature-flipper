<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SSFV\Symfony\Component\Uid;

class NilUlid extends Ulid
{
    public function __construct()
    {
        $this->uid = parent::NIL;
    }
}
