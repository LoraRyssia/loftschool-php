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
            $result = '';
            for ($i=0; $i<=sizeof($string); ++$i) {
                $result .= $string[$i];
            }
            echo $result;
        }
    }
}

// #2

function task2()
{
    $arg_array = func_get_args();
    $result = $arg_array[1];
    $expres = $arg_array[1];
    switch ($arg_array[0]) {
        case '+':
            for ($i=2; $i<sizeof($arg_array); ++$i) {
                $result += $arg_array[$i];
                $expres = $expres . ' + ' .$arg_array[$i];
            };
            echo $expres . ' = ' .$result;
            break;
        case '-':
            for ($i=2; $i<sizeof($arg_array); ++$i) {
                $result -= $arg_array[$i];
                $expres .= ' - ' .$arg_array[$i];
            };
            echo $expres . ' = ' .$result;
            break;
        case '*':
            for ($i=2; $i<sizeof($arg_array); ++$i) {
                $result *= $arg_array[$i];
                $expres .= ' * ' .$arg_array[$i];
            };
            echo $expres . ' = ' .$result;
            break;
        case '/':
            for ($i=2; $i<sizeof($arg_array); ++$i) {
                $result /= $arg_array[$i];
                $expres .= ' / ' .$arg_array[$i];
            };
            echo $expres . ' = ' .$result;
            break;
        default:
            echo "Первый аргумент не обозначает арифметическое действие";
    }
}