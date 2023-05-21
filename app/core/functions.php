<?php
function Show($stuff){
    echo "<pre>";
    print_r($stuff);
    echo "</pre>";
}

/** function to escape data **/
function SanitizeInput($data){
    $data = trim($data);
    $data .= htmlspecialchars($data);
    return $data;
}