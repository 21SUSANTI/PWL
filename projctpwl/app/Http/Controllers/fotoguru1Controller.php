<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\fotoguru;


class fotoguru1Controller extends Controller
{
    //
    public function fotoguru1(){
        $fotogurus = fotoguru::all();
        return view('fotoguru1', ['fotoguru' => $fotogurus]);
    }
}
