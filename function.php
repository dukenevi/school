<?php
/**
 * Created by PhpStorm.
 * User: dukenevi
 * Date: 25.12.16
 * Time: 18:37
 */
function make_file_form($file, $path)
{
    $path = $path .'/'. $file;
    $fileForm = <<<FILE_FORM
        <form class="form-inline" action= "showFile.php" method ="post">
            <input type = "hidden" name = "path" value = "$path"/>
            <tr class="active" >
                <td onclick = "isSubmit()" name = "file">$file</td>
                <td>$path</td>
                <td><input class= "btn btn-block btn-primary" type ="submit" value="VIEW"/></td>               
            </tr>    
        </form>
FILE_FORM;

    return $fileForm;
}

function make_dir_form($dir, $path)
{
    $fullPath = $path .'/'. $dir.'/';
    $dirForm = <<<DIR_FORM
        <form class="form-inline"  method ="post">
            <input type = "hidden" name = "fullPath" value = "$fullPath"/>
            <input type = "hidden" name = "path" value = "$path"/>
            <tr class="active" type ="submit">
                <td >$dir</td>
                <td>$fullPath</td>
                <td><input class= "btn btn-block btn-success" type ="submit" value="GO"/></td>
            </tr> 
        </form>    
DIR_FORM;

    return $dirForm;
}

function make_error_form($file, $path)
{
    $path = $path .'/'. $file;
    $fileForm = <<<FILE_FORM
        <form class="form-inline" action= "showFile.php" method ="post">
            <input type = "hidden" name = "path" value = "$path"/>
            <tr class="active" >
                <td onclick = "isSubmit()" name = "file">$file</td>
                <td>$path</td> 
                <td> - - error open - - </td>
              
            </tr>    
        </form>
FILE_FORM;

    return $fileForm;
}