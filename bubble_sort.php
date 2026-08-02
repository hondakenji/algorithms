<?php

/**
 * @param array<int> $list the array to be sorted
 * @return array<int> the sorted array
 */
function bubbleSort(array $list): array 
{
    $size = count($list);

    if ($size === 0) {
        return [];
    }

    if ($size === 1) {
        return $list;
    }

    for($i = 0; $i < $size; $i++) {
        for($j = 0; $j < $size - $i -1; $j++) {
            if ($list[$j] > $list[$j + 1]) {
                $tmp = $list[$j];
                $list[$j] = $list[$j + 1];
                $list[$j + 1] =  $tmp;
            }
        }
    }

    return $list;
}