<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function ShowHome() {
            $data = array("bangladesh ","india ","pakistan","nepal");
        return view('Home',['dataKey'=>$data]);
    }
}
