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

namespace Chevere\VarSupport;

use DeepCopy\DeepCopy;
use DeepCopy\Exception\CloneException;
use LogicException;

/**
 * Deep copies the given value.
 *
 * Same as `DeepCopy\deep_copy` but it adds breadcrumbs to easy locate
 * offenders unable to be deep copied.
 */
function deepCopy(mixed $value, bool $useCloneMethod = false): mixed
{
    try {
        return (new DeepCopy($useCloneMethod))->copy($value);
    } catch (CloneException $e) {
        if (is_object($value)) {
            $object = new ObjectVariable($value);
            $object->assertClonable();
        }
        // @codeCoverageIgnoreStart
        throw new LogicException($e->getMessage());
        // @codeCoverageIgnoreEnd
    }
}
