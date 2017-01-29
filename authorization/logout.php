<?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 19.01.17
 * Time: 21:51
 */
    session_start();
    $_SESSION["login"] = false;
    echo 'You have cleaned session';
    header('Refresh: 2; URL = index.php');