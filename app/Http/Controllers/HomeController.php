<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class HomeController extends Controller {

    public function home() {

        $name = 'pakkard 11111111111111111 - ';
        //การประกาศตัวแปร
        $sur_name = 150;
        $name = $name . $sur_name; //การรวม string ใช้ .

        //การประกาศตัวแปรแบบตัวเลช และการบวก
        $X = 150;
        $Y = 150;
        $Z = $X + $Y;

        //เงื่อนไข
        if ($X > $Y) {
            $name = 'X มากกว่า Y';
        } else {
            $name = 'X น้อยกว่า Y';
        }

        $val1 = 100;
        $val7 = 999;
        
        $var = [
            "name" => $name,
            "val1" => $val1,
            "val2" => $val1,
            "val3" => $val1,
            "val4" => $val1,
            "val5" => $val1,
            "val6" => $val1,
            "val7" => $val7,
            "val8" => $this->plus($val1,$val7),
        ];

        return view('test.home2', $var);

    }

    private function plus($a, $b) {
        return $a+$b;
    }
}