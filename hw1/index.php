<?php

// #1

$name = "Лариса";
$age = "99";

echo "Меня зовут $name<br><br>";

echo "Мне $age лет <br><br>";

echo "!|\/'"; //убрала обратный слэш, чтобы не выводило ошибок


// #2

const PICTURES = 80; //Кол-во рисунков на выставке
const PIC_MARK = 23; //Кол-во рисунков фломастерами
const PIC_PENC = 40; //Кол-во рисунков карандашами

$pic_paints = PICTURES - PIC_MARK - PIC_PENC; //Находим кол-во рисунков красками

echo $pic_paints . "<br><br>";

// #3

$age = 34;

if (18 <= $age and $age <= 65) {
    echo "Вам еще работать и работать<br><br>";
} elseif (1 <= $age and $age <= 17) {
    echo "Вам еще рано работать<br><br>";
}
elseif ($age > 65) {
    echo "Вам пора на пенсию<br><br>";
} else {
    echo "Неизвестный возраст<br><br>";
}

// #4

$day = 14;

switch ($day) {
    case 1:
        echo "Это рабочий день<br><br>";
        break;
    case 2:
        echo "Это рабочий день<br><br>";
        break;
    case 3:
        echo "Это рабочий день<br><br>";
        break;
    case 4:
        echo "Это рабочий день<br><br>";
        break;
    case 5:
        echo "Это рабочий день<br><br>";
        break;
    case 6:
        echo "Это выходной день<br><br>";
        break;
    case 7:
        echo "Это выходной день<br><br>";
        break;
    default:
        echo "Неизвестный день<br><br>";
}

// #5

$bmv["model"] = "X5";
$bmv["speed"] = "120";
$bmv["doors"] = "5";
$bmv["year"] = "2015";

$toyota["model"] = "camry";
$toyota["speed"] = "110";
$toyota["doors"] = "4";
$toyota["year"] = "2016";

$opel["model"] = "astra";
$opel["speed"] = "125";
$opel["doors"] = "4";
$opel["year"] = "2014";

$car["bmv"] = array("name" => "BMV", "model" => "X5", "speed" => "120", "doors" => "5", "year" => "2015");
$car["toyota"] = array("name" => "Toyota", "model" => "camry", "speed" => "110", "doors" => "4", "year" => "2016");
$car["opel"] = array("name" => "Opel", "model" => "astra", "speed" => "125", "doors" => "4", "year" => "2014");

echo "CAR " . $car["bmv"]["name"] . "<br>";
echo $car["bmv"]["model"] . " ";
echo $car["bmv"]["speed"] . " ";
echo $car["bmv"]["doors"] . " ";
echo $car["bmv"]["year"] . "<br><br>";

echo "CAR " . $car["toyota"]["name"] . "<br>";
echo $car["toyota"]["model"] . " ";
echo $car["toyota"]["speed"] . " ";
echo $car["toyota"]["doors"] . " ";
echo $car["toyota"]["year"] . "<br><br>";

echo "CAR " . $car["opel"]["name"] . "<br>";
echo $car["opel"]["model"] . " ";
echo $car["opel"]["speed"] . " ";
echo $car["opel"]["doors"] . " ";
echo $car["opel"]["year"] . "<br><br>";

// #6

$rows = 10;
$cols = 10;

$table = "<table border='1'>";

for ($tr=1; $tr<=$rows; $tr++) {
    $table .= "<tr>";
    for ($td=1; $td<=$cols; $td++) {
        $result = $tr*$td;
        if ($tr%2 == 0 and $td%2 == 0) {
            $table .= "<td>(" . $result . ")</td>";
        } elseif ($tr%2 != 0 and $td%2 != 0) {
            $table .= "<td>[" . $result . "]</td>";
        } else {
            $table .= "<td>" . $result . "</td>";
        }
    }
    $table .= "</tr>";
}

$table .= "</table>";
echo $table;