<?php

/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 18.01.17
 * Time: 8:45
 */

/**
 * @param $user_name
 * @param $password
 * @return bool
 */
function get_user_role($user_name)
{
    return false;
}

/** find user in Database
 * @param $user_name
 * @param $password
 * @return bool
 */
function find_user($user_name, $password)
{
    $users_db = mysqli_connect('dukenevi.local', 'root', '123456', 'users');//open database
        $user = mysqli_get_cache_stats(); //temp
    mysqli_close($users_db);
    if ($user === 1)
    {
        return true;
    };
    return false;
}

/** find user role and compare
 * @param $user_name
 * @param $file_name
 * @return bool
 */
function user_role_validation($user_name, $file_name)
{
    $users_db = mysqli_connect('dukenevi.local', 'root', '123456', 'users');//open database
        $roles[] = mysqli_get_cache_stats(); //temp
    mysqli_close($users_db);
    if (in_array(substr($file_name, 0 , 1), $roles[]))
    {
        return true;
    };
    return false;
}

function make_data_base()
{
    $users_db = mysqli_connect('dukenevi.local', 'root', '123456', 'users');//open database
    // create DB

    // create tables
        // users
        // roles
        // role file

    mysqli_close($users_db);
    return true;
}

