<?php

class App {
    private $__controller, $__action, $__params, $__conn, $__middleware, $controller;

    function __construct($conn, AuthMiddleware $authMiddleware) {
        $this->__controller = "home";
        $this->__action = "index";
        $this->__params = [];
        $this->__conn = $conn;
        $this->__middleware = $authMiddleware;
        $this->handleUrl();
    }

    public function getPath() {
        if (!empty($_SERVER["PATH_INFO"])) {
            return $_SERVER["PATH_INFO"];
        }
        return null;
    }

    public function handleUrl () {
        $path = $this->getPath();
        if (!empty($path)) {
            $info = array_values(array_filter(explode("/", $path)));
            // handle controller
            if (!empty($info[0])) {
                $this->__controller = ucfirst($info[0])."Controller";
                $this->controller = $info[0];
            } else {
                $this->controller = $this->__controller;
                $this->__controller = ucfirst($this->__controller)."Controller";
            }
            
            if (file_exists("app/controllers/".$this->__controller.".php")) {
                require_once "app/controllers/".$this->__controller.".php";
                if (class_exists($this->__controller)) {
                    $this->__controller = new $this->__controller($this->__conn);
                    unset($info[0]);
                    $info = array_values($info);
                } else {
                    $this->handleError();
                }
            } else {
                $this->handleError();
            }
            // handle action
            if (!empty($info[0])) {
                $this->__action = $info[0];
                unset($info[0]);
                $info = array_values($info);
            }
            // handle params
            if (!empty($info)) {
                $this->__params = $info;
            }

            if (method_exists($this->__controller, $this->__action)) {
                $this->__middleware->execute($this->controller, $this->__action);
                call_user_func_array([$this->__controller, $this->__action], $this->__params);
            } else {
                $this->handleError();
            }
            
        }

    }

    function handleError($name = "404") {
        require_once "app/views/errors/$name.php";
        exit();
    }
}



?>