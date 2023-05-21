<?php

class App
{
    private $controller = 'Home';
    private $method = "index";
    private function SplitURL(){
        // get url parameters
        $URLParams = $_GET["url"] ?? 'home';
        return explode("/", $URLParams);
    }

    public function LoadController(){
        $url = $this->SplitURL();
        $filename = "../app/controllers/".ucfirst($url[0]).".php";
        $NotFound = "../app/controllers/_404.php";

        if(file_exists($filename)){
            require $filename;
            $this->controller = ucfirst($url[0]);
        }else{
            require $NotFound;
            $this->controller = "_404";
        }
        $controller = new $this->controller;
        call_user_func_array([$controller, $this->method], []);
    }
}