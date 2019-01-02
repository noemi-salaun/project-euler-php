<?php
declare(strict_types=1);

/**
 * Iteratively reduce the iterator to a single value using a callback function.
 *
 * @param iterable $iterator
 * @param callable $function
 * @param mixed    $initial
 *
 * @return mixed
 */
function iterable_reduce(iterable $iterator, callable $function, $initial = null)
{
    $acc = $initial;

    foreach ($iterator as $value) {
        $acc = $function($acc, $value);
    }

    return $acc;
}