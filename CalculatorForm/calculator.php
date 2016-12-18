<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="calculator.css">
    <title>Calculator</title>
</head>
<body>

<?php
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
function getValue($value)
{
    if (!isset($_POST[$value]))
    {
         return false;
    }
    return $_POST[$value];
};
// function validation values
function validate($value, $valueName, &$errors)
{
    if (preg_match('/^(\-){0,1}[\d]+(\.){0,1}[\d]*$/', $value))
    {
        return floatval($value);
    }
    elseif (preg_match('/^(\-){0,1}[\d]*$/', $value))
    {
        return intVal($value);
    }
    else
    {
        $errors[$valueName] = 'ERROR, wrong value' . $valueName;
        return false;
    }
};
//  calculator body
    $firstValue = validate(getValue('firstValue'), 'firstValue', $errors);
    $secondValue = validate(getValue('secondValue'), 'firstValue', $errors);
    $symbol = getValue('symbol');
    $result = calculate($firstValue, $secondValue, $symbol, $errors);
?>

    <form action= "calculator.php" method ="post">
        <div class="one"<?= !$errors[$firstValue] ? 'is_error' : '' ?> >
            <label> First argument value </label>
            <input type ="text" name ="firstValue"  placeholder= 'Input first value' value = "<?=$firstValue ?>" />
        </div>
        <div class="one"<?= !$errors[$firstValue] ? 'is_error' : '' ?> >
            <label> Second argument value </label>
            <input type ="text" name ="secondValue" placeholder= 'Input second value' value = "<?=$secondValue ?>" />
        </div>
        <div class="one">
            <label> Select operation </label>
            <label>
                <select name="symbol" value = "<?=$symbol ?>" />
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </label>
        </div>
        <div class="one" >
            <label>result of the calculation </label>
            <input type ="text" readonly name ="result" value = "<?=$result ?>" />
        </div>
        <div class="one">
            <input type ="reset" value="Reset"/>
            <input type ="submit" value="Calculate"/>
        </div>
    </form>
<?php
    if ($errors != null)
    {
        echo '<div class="error_msg" >';
            foreach ($errors as $key => $value)
            {
                echo "<p>". $value."</p>";
            };
        echo '</div>';
    }
?>
</body>
</html>

