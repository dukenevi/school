<?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 01.12.16
 * Time: 19:42
 */
$age=1000;
switch ($age)
{
    case $age>=2 && $age<=5:
        echo "Пора в садик" ;
        break;
    case $age>=6 && $age<=16:
        echo "Пора в школу" ;
        break;
    case $age>=17 && $age<=60:
        echo "Пора на работу" ;
        break;
    case $age>=61 && $age<=90:
        echo "Пора на пенсию" ;
        break;
    case $age>=91:
        echo "Пора" ;
        break;
    default:
        echo "еще Рано" ;
}