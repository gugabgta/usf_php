<?php

namespace usf;

class Html{

    public static function head()
    {
        return file_get_contents($_SERVER['DOCUMENT_ROOT'] . '\templates\head.php');
    }

    public static function content()
    {
        return file_get_contents($_SERVER['DOCUMENT_ROOT'] . '\templates\template.php');
    }

    public static function footer()
    {
        return file_get_contents($_SERVER['DOCUMENT_ROOT'] . '\templates\footer.php');
    }

    public static function login()
    {
        return file_get_contents($_SERVER['DOCUMENT_ROOT'] . '\templates\login.php');
    }
}