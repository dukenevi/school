<?php
    include_once 'function.php';
    if (!isset($_SESSION['login']))
    {
        header('url = login.php');
    }
    if (!user_role_validation($_SESSION['user_name'], $_SERVER['PHP_SELF']))
    {
        die('нет прав доступа');
    }
    /*
    if (isset($_SESSION['user_access']) && $_SESSION['user_access'] === true)
    {
        $role = 'viewer';
    }
    else
    {
        $role = 'guest';
    }
    */
?>