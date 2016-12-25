<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>File manager v.1.0</title>
    <!-- bootstrap include>
        <!-- compiled CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- compiled JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="fm.css">

</head>
<body>
<main class="container">
    <h1 class="text-center">File viewer</h1>
    <form class="form col-xs-12">

    <?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 25.12.16
 * Time: 17:50
 */

    if ( (isset($_POST['path'])) && (isset($_POST['file'])) )
    {
        $fullPath = $_POST['path'].'/'.$_POST['file'];
        $fullPath = realpath($fullPath);
        echo '<input type ="text" readonly class = "col-xs-12"name = "fullPath" value ='.$fullPath.'/>';
        echo '<textarea class="col-xs-12" readonly>'.file_get_contents($fullPath).'</textarea>';
    }
    ?>
    </form>
</main>


</body>
</html>
