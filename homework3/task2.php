<?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 01.12.16
 * Time: 19:37
 */
const PI=3.14;

//PI=10; выводит ошибку
if (defined('PI')!=false){
    echo "вывод константы Пи=", PI;
}
else
{
    echo "константы нет";
}
