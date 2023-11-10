<?php
class OrderController {
    // This function sorts a multidimensional array by a specified key
    function sortByKey(array &$array, $target_key) {
        // Create an array to store the values of the specified key across the array
        $columnValues = [];
        
        // Walk through the array recursively and extract values for the specified key
        array_walk_recursive(
            $array,
            function($v, $k, $key) use (&$columnValues) {
                // Check if the current key matches the specified target key
                if ($k === $key) {
                    // If matched, add the corresponding value to the columnValues array
                    $columnValues[] = $v;
                }
            },
            $target_key
        );

        // Use array_multisort to sort the original array based on the values collected
        array_multisort($columnValues, $array);
    }
}
