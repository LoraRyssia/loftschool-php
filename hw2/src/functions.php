<?php
// #1

function task1($string)
{
    $arg_number = func_num_args();
    $arg_array = func_get_args();
    if ($arg_number == 1) {
        for ($i=0; $i<=sizeof($string); ++$i) {
            echo "<p>" . $string[$i] . "</p>";
        }
    } else {
        if ($arg_array[1] === true) {
            for ($i=0; $i<=sizeof($string); ++$i) {
                $string[$i] .= $string[$i];
            }
            return $string;
        }
    }
}

// #2

