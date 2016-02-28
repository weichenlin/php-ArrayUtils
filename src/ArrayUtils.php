<?php

namespace AZnC\ArrayUtils;

class ArrayUtils
{
    /**
     * remove $needle from $haystack, use array_search
     *
     * @param mixed $needle the value of element to remove
     * @param array $haystack the array want to remove $needle
     * @return array array that removed $needle
     */
    public static function array_remove($needle, $haystack)
    {
        if(($index = array_search($needle, $haystack)) !== false) {
            unset($haystack[$index]);
        }

        return $haystack;
    }

    /**
     * todo: array_values_recursive, array_values_flatten
     */
}