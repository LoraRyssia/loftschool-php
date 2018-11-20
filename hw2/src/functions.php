<?php

// #1

function task1($strings, $glue = "false")
{
    $strings_num = sizeof($strings);
    if ($glue === "false") {
        for ($i = 0; $i <= $strings_num; ++$i) {
            echo "<p>" . $strings[$i] . "</p>";
        }
    } else {
        $result = '';
        for ($i = 0; $i <= $strings_num; ++$i) {
            $result .= ' ' . $strings[$i];
        }
        echo $result . "<br><br>";
    }
}

// #2

function task2()
{
    $args = func_get_args();
    $operator = array_shift($args);
    $string = implode($operator, $args);
    $result = eval('return '.$string.';');;
    echo $string . " = " . $result;
}

// #3

function task3($rows, $cols)
{
    if (!is_int($rows) and !is_int($cols)) {
        echo "Один из аргументов функции не является целым числом.<br>";
        return;

    } else {
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
    fclose($file);
}

function task9($filename)
{
    $file = fopen($filename, "r");
    echo fread($file, 255);
    fclose($file);
}
