<?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 18.12.16
 * Time: 20:42
 */
// function validation values
/**
 * @param $value
 * @param $valueName
 * @param $errors
 * @return bool|float|int
 */
function validate($value, $valueName, &$errors)
{
    if (preg_match('/^(\-){0,1}[\d]+(\.){0,1}[\d]*$/', $value))
    {
        $errors[$valueName] = true;
        return floatval($value);
    }
    elseif (preg_match('/^(\-){0,1}[\d]*$/', $value))
    {
        $errors[$valueName] = true;
        return intVal($value);
    }
    else
    {
        $errors[$valueName] = 'ERROR, wrong value (' . $valueName . ')';
        return false;
    }
};
