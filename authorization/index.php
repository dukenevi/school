<?php
//    include_once 'checking.php';
    session_start();
    if (!isset($_SESSION['login']) || ($_SESSION['login'] != true))
    {
        echo '<h1>You have go to login</h1>';
        echo $_SESSION['user_name'];
        header('Refresh: 3; URL = login.php');
    }
    else
    {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Authorization v.1.0</title>
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
    <h1 class="text-center">authorization GOOD <br /> </h1>
    <?php
    echo $_SESSION['login'] . "<br />";
    echo $_SESSION['user_name'] . "<br />";
    ?>
    <a href="logout.php" tite="Logout">Logout Session.</a>
</main>
</body>
<?php
    }
?>