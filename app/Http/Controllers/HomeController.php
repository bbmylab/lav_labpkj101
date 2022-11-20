<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class HomeController extends Controller {

    public function home() {

        $name = 'pakkard 11111111111111111';
        
        return view('test.home2', [
            "name" => $name
        ]);
    }
}