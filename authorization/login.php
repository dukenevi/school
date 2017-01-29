<?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 18.01.17
 * Time: 9:10
 */
    include_once 'function.php';
    if (!isset($_SESSION['login']))
    {
        session_start();
    }

    if (isset( $_POST['user_name']) && isset($_POST['user_password']) )
    {
        echo "step 1";
        //if ( find_user($_POST['user_name'], $_POST['user_password']) )
        if ($_POST['user_name'] == 'Vadim' && $_POST['user_password'] == '123456')
        {
            echo "step 2";
            $_SESSION['login'] = true;

            echo "step 3";
            $_SESSION['user_name'] = $_POST['user_name'];

            echo "step 4";
            header('Refresh: 3; URL = index.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login v.1.0</title>
    <!-- bootstrap include>
        <!-- compiled CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- compiled JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="login.css">

</head>
<body>
    <main class="container">
        <h1 class="text-center">login</h1>
        <form class="form" action= "login.php" method ="post">
            <input type = "text" name = "user_name" placeholder= 'Input login: Vadim'/>
            <input type = "password" name = "user_password" placeholder= 'Input password: 123456'/>
            <input class= "btn" type ="submit" value="Login"/>
            <button type="button btn-warning" class="btn btn-warning">Reset</button>
        </form>
    </main>
</body>


