<?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 25.12.16
 * Time: 18:37
 */
function make_file_form($file, $path)
{
    $fileForm = <<<FILE_FORM
        <form class="form-inline" action= "showFile.php" method ="post">
            <div class = "col-xs-8 col-xs-offset-3">
                <input type = "hidden" name = "path" value = "$path"/>
                <input type = "text" class = "col-xs-6" name ="file" value = "$file" />
                <input class= "btn btn-primary col-xs-2" type ="submit" value="VIEW"/>
            </div>
        </form>
FILE_FORM;

    return $fileForm;
}

function make_dir_form($dir, $path)
{
    $fullPath = $path .'/'. $dir.'/';
    $dirForm = <<<DIR_FORM
        <form class="form-inline"  method ="post">
            <div class = "col-xs-8 col-xs-offset-3">
                <input type = "hidden" name = "fullPath" value = "$fullPath"/>
                <input type = "hidden" name = "path" value = "$path"/>
                <input type = "text" class = "col-xs-6" name ="file" value = "$dir" />
                <input class= "btn btn-success col-xs-2" type ="submit" value="GO"/>
            </div>
        </form>    
DIR_FORM;

    return $dirForm;
}