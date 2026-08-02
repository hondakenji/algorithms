<?php

/**
 * @param string $string string to compress
 * @return string compressed string(ex: aaabbbcc => a3b3c2)
 */
function compressString(string $string): string 
{
    $result = "";
    $length = strlen($string);

    if ($length == 0) {
        return $result;
    }

    $count = 0;

    for ($i = 0; $i < $length; $i++) {
        $count++;

        $nextLetterIndex =  $i + 1;

        if ($nextLetterIndex >= $length || $string[$i] !== $string[$nextLetterIndex]) {
            $result .= $string[$i] . $count;
            $count = 0;
        }
    }

    return $result;
}