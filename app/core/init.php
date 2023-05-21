<?php

    spl_autoload_register(function($className){
        require $filename = "../app/models/".ucfirst($className).".php";
    });

//    This script loads all files in core directory
    require 'config.php';
    require 'functions.php';
    require 'Database.php';
    require 'Model.php';
    require 'Controller.php';
    require 'App.php';