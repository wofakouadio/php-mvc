<?php

/**
 * User Class
**/

class User
{
    use Model;
    protected $table = 'users_table';
    protected $allowedColumns = [
        'name',
        'age'
    ];
}