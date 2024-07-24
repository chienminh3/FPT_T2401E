<?php
class BaseController {
    const VIEW_FOLDER = "app/views/";
    function view($path, array $dataArr = []) {
        $path = self::VIEW_FOLDER.$path.".php";
        $data = $dataArr;
        return require $path;
    }

    function initModel($modelName,$conn) {
        if (file_exists("./app/models/$modelName.php")) {
            require_once "./app/models/$modelName.php";
            if (class_exists($modelName)) {
                $model = new $modelName($conn);
                return $model;  
            }
        }
        return null;
    }
}

?>