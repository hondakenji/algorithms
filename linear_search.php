<?php

/**
 * @param array<int> $list an array of integers to search
 * @param int $target an integer number to search on the list
 * 
 * @return int the index where the target is located (-1 if not found)
 */
function linearSearch(array $list, int $target): int
{
    $size = count($list);

    if ($size === 0) {
        return -1;
    }

    for($i = 0; $i < $size; $i++) {
        if ($list[$i] === $target) {
            return $i;
        }
    }

    return -1;
}