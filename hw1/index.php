<?php

// #1

$name = "Лариса";
$age = "99";

echo "Меня зовут $name";

echo "Мне $age лет";

echo "!|\/'"; //убрала обратный слэш, чтобы не выводило ошибок


// #2

const PICTURES = 80; //Кол-во рисунков на выставке
const PIC_MARK = 23; //Кол-во рисунков фломастерами
const PIC_PENC = 40; //Кол-во рисунков карандашами

$pic_paints = PICTURES - PIC_MARK - PIC_PENC; //Находим кол-во рисунков красками

echo $pic_paints;

// #3

$age = 34;

if (18 <= $age and $age <= 65) {
    echo "Вам еще работать и работать";
} elseif (1 <= $age and $age <= 17) {
    echo "Вам еще рано работать";
}
elseif ($age > 65) {
    echo "Вам пора на пенсию";
} else {
    echo "Неизвестный возраст";
}

// #4

$day = 14;

switch ($day) {
    case 1:
        echo "Это рабочий день";
        break;
    case 2:
        echo "Это рабочий день";
        break;
    case 3:
        echo "Это рабочий день";
        break;
    case 4:
        echo "Это рабочий день";
        break;
    case 5:
        echo "Это рабочий день";
        break;
    case 6:
        echo "Это выходной день";
        break;
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}