<?php

namespace App\Controllers;

class UserController

{
    public function users()
    {
        echo "Это страница пользователя"
    }
    public function create()
    {
        echo "Страница создания пользователя";
    }
    public function index()
    {
        echo "Страница показа списка пользователей";
    }
    public function update()
    {
        echo "Страница изменения данных пользователя";
    }
    
}