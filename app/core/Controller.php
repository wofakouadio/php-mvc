<?php

    trait Controller{
        public function view($name){
            $filename = "../app/views/".$name.".view.php";
            $NotFound = "../app/views/404.view.php";

            if(file_exists($filename)){
                require $filename;
            }else{
                require $NotFound;
            }
        }
    }
