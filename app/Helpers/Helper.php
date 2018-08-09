<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use Carbon\Carbon;
use DB;

class Helper
{

  // Get (from Events) this month and next month's events
  // and order them in ASC order
    public static function getCurrentEvents()
    {
        $now = Carbon::now(); //http://php.net/manual/en/function.date.php
           $thisMonth = strtoupper($now->format('M')); // JUN
           $nextMonth = strtoupper(date('M', strtotime('+1 month'))); // JUL

           // Fetch results from this month or next month, and this year
        // ordered by start date in ASC order
        $events = DB::table('events')
                     ->where(function ($query) {
                         $now = Carbon::now(); //http://php.net/manual/en/function.date.php
                             $thisMonth = strtoupper($now->format('M')); // JUN
                             $nextMonth = strtoupper(date('M', strtotime('+1 month'))); // JUL

                         $query->where('year', '=', $now->year)
                               ->where('month_ABC', '=', $thisMonth);
                     })
                     ->orWhere(function ($query) {
                         $now = Carbon::now(); //http://php.net/manual/en/function.date.php
                             $thisMonth = strtoupper($now->format('M')); // JUN
                             $nextMonth = strtoupper(date('M', strtotime('+1 month'))); // JUL

                         $query->where('year', '=', $now->year)
                               ->where('month_ABC', '=', $nextMonth);
                     })
                     ->orderBy('day', 'asc')
                     ->get();

        return $events;
    }
}
