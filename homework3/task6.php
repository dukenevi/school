<?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 01.12.16
 * Time: 19:58
 */
$sitesFile=[
    'главная страница'=>'index.html',
    'файл стилей'=>'style.css',
    'файл картинки'=>'image.jpg',
    'файл яндекса'=>'robots.txt',
    'файл гугла'=>'sitemap.xml',
    'файл иконки'=>'favicon.ico',

];
foreach ($sitesFile as $key=>$val)
{
    echo $key,' : ',$val,"<br /><br />";
}