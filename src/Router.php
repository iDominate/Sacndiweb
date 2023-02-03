<?php

namespace Core;

class Router
{
    protected string $controller  = "";
    protected string $action = "";
    protected array $params = [];
    protected string $controller_namespace = 'App\Controllers\\';

    public function __construct()
    {
        $this->parseUri();
        $this->resolveRequest();
    }

    /**
     * Parses the incoming Uri into controller, action, params.
     * @return void
     */
    protected function parseUri()
    {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        $uri = explode("/", $uri);
        if (isset($uri[0]) and ($uri[0] == 'add-product')) {
            $this->action = 'add';
        } elseif (isset($uri[0], $uri[1])  and sizeof($uri) == 3) {
            $this->action = $uri[2];
            array_shift($uri);
            array_shift($uri);
            array_shift($uri);
            if (!empty($uri)) {
                $this->params = $uri;
            }
        } else {
            $this->action = 'all';
        }
    }

    /**
     * Checks whether controller, action exist, and if they do, executes them.
     * @return void
     */
    protected function resolveRequest()
    {
        if (class_exists($this->controller_namespace . $this->controller)) {
            $current_controller = new ($this->controller_namespace . $this->controller);
            if (method_exists($current_controller, $this->action)) {

                call_user_func_array([$current_controller, $this->action], $this->params);
            } else {
                echo "Method Doesn't exist";
            }
        } else {
            echo "Doesn't exist";
        }
    }
}
