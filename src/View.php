<?php

namespace Core;

class View
{
    public static function make(string $view, array $params = [])
    {
        $file = view_path() . $view . '.php';
        extract($params);
        if (file_exists($file)) {
            ob_start();
            include($file);
            return ob_get_flush();
        } else {
            echo "View Not Found";
        }
    }
}
