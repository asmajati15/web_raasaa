<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Menu | Raasaa'
        ];

        $menuModel = new MenuModel();
        $menu = $menuModel->findAll();
        dd($menu);

        return view('menu/index', $data);
    }
}
