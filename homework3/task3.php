<?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 01.12.16
 * Time: 19:39
 */
$age=100;
if($age>=2 && $age<=5)
{
    echo "Пора в садик" ;
}
elseif($age>=6 && $age<=16)
{
    echo "Пора в школу" ;
}
elseif($age>=17 && $age<=60)
{
    echo "Пора на работу" ;
}
elseif($age>=61 && $age<=90)
{
    echo "Пора на пенсию" ;
}
elseif($age>=91)
{
    echo "Пора" ;
}
else
{
    echo "Еще рано" ;
}
