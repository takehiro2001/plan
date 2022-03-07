<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class PastController extends Controller
{
        public function index(Menu $menu)
    {
        return view('menus/past/index')->with(['menus' => $menu->get()]);  
    }
}
