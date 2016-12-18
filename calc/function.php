<?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 18.12.16
 * Time: 20:42
 */

// function calculate
// $fistValue, $secondValue - arguments
// $symbol - operation
// $errors - array of error
function calculate($firstValue, $secondValue, $symbol, &$errors)
{
    switch ($symbol)
    {
        case "+":
            $result = $firstValue + $secondValue;
            break;
        case "-":
            $result = $firstValue - $secondValue;
            break;
        case "*":
            $result = $firstValue * $secondValue;
            break;
        case "/":
            if ($secondValue == 0)
            {
                $errors["secondValue"] = 'ERROR, division by zero';
                $errors["symbol"] = 'ERROR, division by zero';
                $result = 'ERROR';
                break;
            }
            $result = $firstValue / $secondValue;
            break;
        default:
            $errors["symbol"] = 'ERROR operation';
    }
    return $result;
};
// function of receiving values from an global array
/**
 * @param $value
 * @return bool
 */
function getValue($value)
{
    if (!isset($_POST[$value]))
    {
        return false;
    }
    return $_POST[$value];
};
/**
 * @param $value
 * @return string
 */
function getSymbol($value)
{
    if (!isset($_POST[$value]))
    {
        return '+';
    }
    return $_POST[$value];

}