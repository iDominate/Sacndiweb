<?php

use Core\View;

/**
 * Returns the view path
 * @return string
 */
function view_path()
{

    return __DIR__ . '/../views/';
}

/**
 * Render A View With parameters
 * @param string $view
 * @param array $params
 * @return mixed
 */
function view(string $view, array $params = [])
{
    return View::make($view, $params);
}

function route($route)
{
    return BASE_URL . $route;
}

function redirect($path)
{
    header('location:' . BASE_URL . $path);
}
