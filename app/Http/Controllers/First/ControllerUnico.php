<?php

namespace App\Http\Controllers\First;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\trains;
class ControllerUnico extends Controller
{
    function index() {
        $data=date_default_timezone_get();
        $treni=trains::where('data_partenza', "2023-01-24")->get();


        return view('home', [
            "treni"=>$treni
        ]);
    }
}
