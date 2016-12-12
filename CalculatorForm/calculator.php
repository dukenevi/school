<?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 12.12.16
 * Time: 17:28
 */

$arg1;
$arg2;
$operation;
$result;
//начальные значения для формы
if (!isset($_POST['arg1']))
{
    $arg1 =0;
}
if (!isset($_POST['arg2']))
{
    $arg2 =0;
}
if (!isset($_POST['operation']))
{
    $operation ="+";
}

/*
if (!isset($_POST['arg1']))
{
    $arg1 =0;
}
*/

$formCal = <<<FORM
    <form action= "calculator.php" method ="post">
        <p> аргумент 1 => <input type ="text" name ="arg1" value = "$arg1" /></p>
        <p> аргумент 2 => <input type ="text" name ="arg2" value = "$arg2" /></p>
        <p> операция   => <input type ="text" name ="operation" value = "$operation" /></p>
        <p> <input type ="submit" /> </p>
    </form>
FORM;

echo $formCal;

//calculator
$arg1 = $_POST[arg1];
echo $arg1;
$arg2 = $_POST[arg2];
echo $arg2;
$operation = $_POST[operation];
echo $operation;
switch ($operation)
{
    case "+":
        $result = $arg1 + $arg2;
        break;
    case "-":
        $result = $arg1 - $arg2;
        break;
    case "*":
        $result = $arg1 * $arg2;
        break;
    case "/":
        $result = $arg1 / $arg2;
        break;
    default:
        $result= "<p> error operation </p>";
}


echo "<p> результат  => $result </p>";
echo  "<a href='calculator.php'> Reset </a>";
