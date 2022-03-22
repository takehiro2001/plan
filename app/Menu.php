<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class Menu extends Model
{
    protected $fillable = [
        'date',
        'muscle',
        'body',
        'user_id'
    ];
    
    
    function getMenusByWeek() {
      $start_date = Carbon::today();
      $end_date = $start_date->copy()->addDays(6);
      $menus = DB::table('menus')
           ->whereBetween('date', [$start_date, $end_date])
           ->get();
      $date = new Carbon();
      $date_menus = [];
      for ($i = 0; $i < 7; $i++) {
            $date_menus[$date->format('Y-m-d')] = "";
            $date = $date->copy()->addDay();
      };
      foreach($menus as $menu){
        foreach($date_menus as $date => $_){
          if($menu->date == $date){
           $date_menus[$date] = $menu;  
          }
        }
      }
      return $date_menus;
    }
}
