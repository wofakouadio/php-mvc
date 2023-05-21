<?php

class App
{
    private $controller = 'Home';
    private $method = "index";
    private function SplitURL(){
        // get url parameters
        $URLParams = $_GET["url"] ?? 'home';
        return explode("/", trim($URLParams, "/"));
    }

    public function LoadController(){
        $url = $this->SplitURL();
        //select controller
        $filename = "../app/controllers/".ucfirst($url[0]).".php";
        $NotFound = "../app/controllers/_404.php";
        if(file_exists($filename)){
            require $filename;
            $this->controller = ucfirst($url[0]);
            unset ($url[0]);
        }else{
            require $NotFound;
            $this->controller = "_404";
        }

        $controller = new $this->controller;
        // select method
        if(!empty($url[1])){
            if(method_exists($controller, $url[1])){
                $this->method = $url[1];
                unset ($url[1]);
            }
        }
        call_user_func_array([$controller, $this->method], $url);
    }
}