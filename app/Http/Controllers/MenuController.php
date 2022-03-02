<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
     public function index(Menu $menu)
    {
        return view('menus/plan/index')->with(['menus' => $menu->get()]);
    }

}
