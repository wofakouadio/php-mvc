<?php

class Products extends Controller
{
    public function index(){
//        echo "This is Products Page Controller";
        $this->view('products');
    }
}