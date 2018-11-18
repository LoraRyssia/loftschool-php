<?php

// #1

function task1($string)
{
    $arg_number = func_num_args();
    $arg_array = func_get_args();
    if ($arg_number == 1) {
        for ($i = 0; $i <= sizeof($string); ++$i) {
            echo "<p>" . $string[$i] . "</p>";
        }
    } else {
        if ($arg_array[1] === true) {
            $result = '';
            for ($i = 0; $i <= sizeof($string); ++$i) {
                $result .= ' ' . $string[$i];
            }
            echo $result . "<br>";
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
            for ($i = 2; $i < sizeof($arg_array); ++$i) {
                $result += $arg_array[$i];
                $expres = $expres . ' + ' .$arg_array[$i];
            };
            echo $expres . ' = ' .$result;
            break;
        case '-':
            for ($i = 2; $i < sizeof($arg_array); ++$i) {
                $result -= $arg_array[$i];
                $expres .= ' - ' .$arg_array[$i];
            };
            echo $expres . ' = ' .$result;
            break;
        case '*':
            for ($i = 2; $i < sizeof($arg_array); ++$i) {
                $result *= $arg_array[$i];
                $expres .= ' * ' .$arg_array[$i];
            };
            echo $expres . ' = ' .$result;
            break;
        case '/':
            for ($i = 2; $i < sizeof($arg_array); ++$i) {
                $result /= $arg_array[$i];
                $expres .= ' / ' .$arg_array[$i];
            };
            echo $expres . ' = ' .$result;
            break;
        default:
            echo "Первый аргумент не обозначает арифметическое действие<br>";
    }
}

// #3

function task3($a, $b)
{
    if (is_int($a) and is_int($b)) {
        $rows = $a;
        $cols = $b;

        $table = "<table border='1'>";

        for ($tr = 1; $tr <= $rows; $tr++) {
            $table .= "<tr>";
            for ($td = 1; $td <= $cols; $td++) {
                $table .= "<td>" . $tr*$td . "</td>";
            }
            $table .= "</tr>";
        }

        $table .= "</table>";
        echo $table;
    } else {
        echo "Один из аргументов функции не является целым числом.<br>";
    }
}

// #4

function task4()
{
    echo date("d.m.Y H:m") . "<br>";
}

function task5()
{
    echo mktime(00,00,00,02,24,2016) . "<br>";
}

// #5

function task6()
{
    echo str_replace("К","","Карл у Клары украл Кораллы") . "<br>";
}

function task7()
{
    echo str_replace("Две","Три","Две бутылки лимонада") . "<br>";
}

// #6

function task8()
{
    $file = fopen("test.txt", "w");
    fwrite($file, "Hello again!");
}

function task9($filename)
{
    $file = fopen($filename, "r");
    echo fread($file, 255);
}
