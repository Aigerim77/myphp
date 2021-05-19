<?php

namespace App\Controllers;

class ProductController

{
    public function products()
    {
        echo "Это страница продуктов"
    }
    public function create()
    {
        echo "Страница создания продуктов";
    }
    public function index()
    {
        echo "Страница показа списка продуктов";
    }
    public function update()
    {
        echo "Страница изменения продуктов";
    }
    
}