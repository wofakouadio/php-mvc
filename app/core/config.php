<?php

//    if($_SERVER["SERVER_NAME"] == "localhost"){
//        if(!defined("ROOT")){
//            define("ROOT", "https://php-mvc.dev/public");
//        }
//    }else{
//        if(!defined("ROOT")){
//            define("ROOT", "https://yourwebsite.com");
//        }
//    }

//    if(!defined("ROOT")){
/** Absolute Path **/
const ROOT = "https://php-mvc.dev/";
//    }
/** Database configuration **/
const LOCALHOST = "localhost";
const USERNAME = "root";
const PASSWORD = "";
const DATABASE = "php-mvc-db";
const CHARSET = "utf8";
const DSN = "mysql:hostname=".LOCALHOST.";dbname=".DATABASE.";charset=".CHARSET;