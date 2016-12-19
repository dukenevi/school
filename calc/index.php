<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Calculator v.2.0</title>
<!-- bootstrap include>
    <!-- compiled CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- compiled JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="calc.css">

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
$secondValue = validate(getValue('secondValue'), 'secondValue', $errors);
$symbol = getSymbol('symbol');
$result = calculate($firstValue, $secondValue, $symbol, $errors);
?>

<main class="container calculator">
    <h1 class="text-center">Calculator v.2.0</h1>

    <form class="calc_form" action= "index.php" method ="post">
         <div class="flex_box has-success">
             <p class="text-primary calc_p" >First argument value</p>
             <input type ="text" class="calc_input" name ="firstValue"  placeholder= 'Input first value' value = "<?=$firstValue ?>" />
         </div>
         <div class="flex_box has-success">
             <p class="text-primary calc_p">Second argument value</p>
             <input type ="text" class="calc_input" name ="secondValue" placeholder= 'Input second value' value = "<?=$secondValue ?>" />
         </div>
         <div class="flex_box">
              <p class="text-primary calc_p">Select operation</p>
              <select name="symbol" value = "<?=$symbol ?>" />
                 <option value="+">+</option>
                 <option value="-">-</option>
                 <option value="*">*</option>
                 <option value="/">/</option>
              </select>
         </div>
         <div class="flex_box">
              <p class="text-primary calc_p">result of the calculation</p>
              <input type ="text" class="calc_input" readonly name ="result" value = "<?=$result ?>" />
         </div>
         <div class="flex_box">
             <input class="btn btn-info " type ="reset" value="Reset"/>
             <input class="btn btn-success" type ="submit" value="Calculate"/>
         </div>
    </form>
    <div class="error_form has-error">
        <?php
            foreach ($errors as $key => $value)
            {
                if ($value != 'true')
                {
                    echo '<input type ="text" class="form-control" readonly value = ">'. $value.'" />';
                }
            };
        ?>
    </div>
    <div class="row"></div>
</main>
</body>
</html>
