<?php

class HomeController
{

    /**
     * Prints nested key-value pairs recursively.
     *
     * @param array $data   The data to print.
     * @param int   $indent The indentation level.
     */
    public function printFormatedKeyValue($data, $indent = 0)
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                // Print the key and move to a new line for nested arrays.
                echo str_repeat('    ', $indent) . "$key:\n";
                // Recursively call the function for nested arrays.
                $this->printFormatedKeyValue($value, $indent + 1);
            } else {
                // Print key-value pair for non-array values.
                echo str_repeat('    ', $indent) . "$key: $value\n";
            }
        }
    }
}
