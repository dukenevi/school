<?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 01.12.16
 * Time: 19:46
 */
echo "<H1>Нечетные числа в диапазоне от 1 до 100</H1> <br />";
for($i=0; $i<=100; $i++)
{
    if(($i % 2)==1)
	{
        echo $i,"<br />";
    };
};