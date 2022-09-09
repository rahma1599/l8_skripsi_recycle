<?php

namespace App\Helpers;
use Carbon\Carbon;
use App\Models\RecycleModel;
// use Illuminate\support\Facades\DB;
use Illuminate\Support\Str;

class AutoNumber
{
    //public static $kd = '';
    public static function getYearMonthDay(){
        $now = Carbon::now();
        $ymd = $now->year . $now->month . $now->day;
        return $ymd;
    }

    public static function getRecycleAutoNo($prefix){
        $now = Carbon::now();
        $ymd = $now->year . $now->month . $now->day;
        $get_awal = RecycleModel::all()->last();
        if($get_awal === null){
            $no = 0;
            $kode = $prefix.'000001';
        }else{
            $no = Str::substr($get_awal->id_recycle,3,6);
            $kode = $prefix.sprintf('%06s',(int)$no+1);
        }
        return $kode;
    }


}
