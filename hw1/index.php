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
