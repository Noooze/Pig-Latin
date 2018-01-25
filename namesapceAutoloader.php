<?php


//autoloader class

function autoloader($class)
{
    $class = str_replace('\\','/', $class);
    $fileName = "$class.php";
    $directory = __DIR__;

    $path = "$directory/$fileName";

    if (file_exists($path))
    {
        include_once $path;
    }

    else
    {
        var_dump($path);
    }
}

spl_autoload_register("autoloader");