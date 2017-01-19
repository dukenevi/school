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
    <script>
        function isSubmint()
        {
            form.submit();
        }
    </script>
</head>
<body>
<main class="container">
    <h1 class="text-center">File manager</h1>
    <form class="form"  method ="post">
        <div class="ROW">
        <?php
        /**
         * Created by PhpStorm.
         * User: dukenevi
         * Date: 25.12.16
         * Time: 17:49
         */
        include_once ("function.php");

        if (isset($_POST['fullPath']))
        {
            $workPath = realpath($_POST['fullPath']);
        }
        else
        {
            $workPath = dirname(__FILE__);
        }
        ?>

        <form class="form-inline"  method ="post">
            <div class = "col-xs-8 col-xs-offset-3">
                <input type ="text" class = "col-xs-8" readonly name = "workPath" value =<?=$workPath?>/>
            </div>
        </form>
        <table class="table table-bordered table-hover">
            <?php
            if ($dirHeader = opendir($workPath))
            {
                while (($file = readdir($dirHeader)) !== false)
                {
                     switch (filetype($file))
                     {
                         case 'dir':
                             if ($file != '.') {echo make_dir_form($file, $workPath);}
                             break;
                         case 'file':
                             echo make_file_form($file, $workPath);
                             break;
                         case FALSE:
                             echo make_error_form($file, $workPath);
                         default:
                            break;
                     };
                }
            closedir($dirHeader);
            }
            ?>
        </table>
        </div>
        <form class="form-inline" action= "index.php" method ="post">
            <div class = "col-xs-6 col-xs-offset-3">
                <button type="button btn-warning" class="btn btn-warning">Reset</button>
            </div>
        </form>
    </form>
</main>
</body>
</html>