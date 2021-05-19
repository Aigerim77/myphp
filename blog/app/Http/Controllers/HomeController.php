<?php

namespace App\Controllers;

use Illuminate\HTTp\Request;

class HomeController extends Controllers

{
    public function index()
    {
        echo "Главная страница";
    }

    public function posts()
    {
        echo "Это страница новостей"
    }

    public function aboutus()
    {
        echo "О нас";
    }
}