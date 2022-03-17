<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MenuController extends Controller
{   
     public function index(Menu $menu)
    {   
        $menus = $menu->getMenusByWeek();
        
        $arr = ['Sun.', 'Mon.', 'Tue.', 'Wed.', 'Thu.', 'Fri.', 'Sat.'];
        $weekArr = [];
        $date = new Carbon();
        for ($i = 0; $i < 7; $i++) {
            $week = $date->dayOfWeek;
            $weekArr[] = [ 
              'date'   => $date,
              'week'  => $arr[$week],];
            $date = $date->copy()->addDay();
        }
        return view('menus/plan/index')->with(['menus' => $menus,'weekCalenderData' => $weekArr]);
    }
        /**
     * 特定IDのmenuを表示する
     *
     * @params Object Menu // 引数の$menuはid=1のPostインスタンス
     * @return Reposnse menu view
     */
    public function show(Menu $menu)
    {
        return view('menus/show/index')->with(['menu' => $menu]);
        
    }
    
    public function create()
    {
        return view('menus/create');
    }
    public function store(Request $request, Menu $menu)
    {
        $input = $request['menus'];
        $input += ['user_id' => $request->user()->id];   
        $menu->fill($input)->save();
        return redirect('/show/' . $menu->id);
    }
    public function edit(Menu $menu)
    {
        return view('menus/show/edit')->with(['menu' => $menu]);
    }
    public function update(Request $request, Menu $menu)
    {
        $input_menu = $request['menu'];
        $menu->fill($input_menu)->save();
    
        return redirect('/show/' . $menu->id);
    }

}
