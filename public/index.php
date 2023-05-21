<?php
    // start session
    session_start();

    //Load all core scripts
    require '../app/core/init.php';

    DEBUG ? ini_set('display_errors', 1) : ini_set("display_errors", 0);

    $App = new App;

    echo $App->LoadController();
