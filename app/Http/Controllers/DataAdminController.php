<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\organ;

class DataAdminController extends Controller
{
    //
    function show(){
        $data = organ::all();
        return view('organadmin', ['organ' => $data]);
    }


}
