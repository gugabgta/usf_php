<?php

namespace usf;

class Sistema {
    public static function redirect($url)
    {
        echo "<script>window.location.href='{$url}';</script>";
        exit;
    }
}
