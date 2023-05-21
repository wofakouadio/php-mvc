<?php
    // start session
    session_start();

    //Load all core scripts
    require '../app/core/init.php';

    $App = new App;

    echo $App->LoadController();
