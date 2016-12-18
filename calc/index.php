<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="calc.css">
    <title>Calculator</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 18.12.16
 * Time: 20:42
 */
// include php-files
include_once 'function.php';
include_once 'validation.php';

//  calculator body
$firstValue = validate(getValue('firstValue'), 'firstValue', $errors);
$secondValue = validate(getValue('secondValue'), 'firstValue', $errors);
$symbol = getSymbol('symbol');
$result = calculate($firstValue, $secondValue, $symbol, $errors);
?>

<form action= "index.php" method ="post">
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
