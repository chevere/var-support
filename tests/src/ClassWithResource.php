<?php

/*
 * This file is part of Chevere.
 *
 * (c) Rodolfo Berrios <rodolfo@chevere.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Chevere\Tests\src;

final class ClassWithResource
{
    private array $array;

    private $file;

    public function __construct($resource)
    {
        $this->array = [$resource];
        $this->file = fopen(__FILE__, 'r');
    }
}
