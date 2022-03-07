<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Menu extends Model
{
    protected $fillable = [
        'date',
        'muscle',
        'body',
        'user_id'
    ];
    
    
    /**
     * 週カレンダーの配列を返す関数
     * @param: $startSun(:Boolean)
     *         true ... 日曜から始める
     *         false ... 月曜から始める
     * @param: $date(:String) ... 今日の日付
     */
    function getWeekCalender($isStartSun = true, $date = "") {
      $today = new Carbon( $date );
      $todayDay = $today->day;
      $startDate = $this->getStartDay( $today->toDateString("Y-m-d"), $isStartSun );
      $startDay = $startDate->day;
      // 週の最終日を取得
      // note. コピーを作成しないと元のインスタンスの値が変更される
      $lastDay = $startDate->copy()->addDay(7)->day;
    
      // 開始日のある月の最終日を取得
      $limitDay = $startDate->copy()->endOfMonth()->day;
    
      $month = $startDate->month;
      $offset = $limitDay - $startDay;
      $day = $startDay;
      $weekArr = [];
      $i = 0;
      while($i < 7) {
        $day = $startDay + $i;
        // 月を跨いだ時
        if( $day > $limitDay ) {
          $day = $i - $offset;
          if($day === 1) {
            $month += 1;
          }
          if($month > 12) {
            $month = 1;
          }
        }
        if($isStartSun) {
          $week = $this->getWeekByIndex($i);
        } else {
          $week = $this->getWeekByIndex($i+1);
        }
        $weekArr[] = [
          'month' => $month,
          'day'   => $day,
          'week'  => $week,
          'today' => $todayDay === $day? true : false,
        ];
        $i++;
      }
    
      return $weekArr;
    }
    
    /**
     * 週の最初の日を取得
     * @param $today(:String) "Y-m-d"
     */
    function getStartDay($today, $isStartSun) {
      $dt = new Carbon( $today );
    
      // $today が週の内何日目か (Sun = 0)
      $w = $dt->dayOfWeek;
    
      // 月曜始まりのとき
      if( !$isStartSun ) {
        // 今日が日曜なら前の月曜
        if($w === 0) {
          $w = 7;
        }
        $w -= 1;
      }
    
      return $dt->subDay( $w );
    }
    
    function getWeekByIndex($i) {
      $arr = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
      $len = count($arr);
      if($i >= $len) {
        $i -= $len;
      }
      return $arr[$i];
    }
}
