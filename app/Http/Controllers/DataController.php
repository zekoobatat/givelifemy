<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\organ;

class DataController extends Controller
{
    //
    function show(){
        $data=organ::all();
        return view('organ',['organ'=>$data]);
    }

}
