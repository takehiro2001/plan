<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MenuController extends Controller
{   
     public function index(Menu $menu)
    {   
        $weekCalenderData = $menu->getWeekCalender(false, "2017-03-03");
        $date = date('Y-m-d');
        $next_6day = date('Y-m-d', strtotime('+6 day'));
        $menus = DB::table('menus')
           ->whereBetween('date', [$date, $next_6day])
           ->get();
        $week = [date('l') => [], date('l', strtotime('+1 day')) => [], date('l', strtotime('+2 day')) => [],date('l', strtotime('+3 day')) => [],date('l', strtotime('+4 day')) => [],date('l', strtotime('+5 day')) => [],date('l', strtotime('+6 day')) => []];
        foreach($menus as $menu){
            $day = date('l', strtotime($menu->date));
            switch($day){
                case"Monday":
                    $week["Monday"] = $menu;
                    break;
                case"Tuesday":
                    $week["Tuesday"] = $menu;
                    break;
                case"Wednesday":
                    $week["Wednesday"] = $menu;
                    break;
                case"Thursday":
                    $week["Thursday"] = $menu;
                    break;
                case"Friday":
                    $week["Friday"] = $menu;
                    break;
                case"Saturday":
                    $week["Saturday"] = $menu;
                    break;
                case"Sunday":
                    $week["Sunday"] = $menu;
                    break;
            }
        }
        return view('menus/plan/index')->with(['menus' => $week,'weekCalenderData' => $weekCalenderData]);
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

}
