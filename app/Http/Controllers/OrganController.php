<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organ;

class OrganController extends Controller
{
    public function dataInsert(Request $request)
    {
        $name = $request->input('name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $blood = $request->input('blood');
        $organ = $request->input('organ');
        $state = $request->input('state');

        $isInsertSuccess = Organ::create([
            'name' => $name,
            'age' => $age,
            'gender' => $gender,
            'blood' => $blood,
            'organ' => $organ,
            'state' => $state,
        ]);

        if ($isInsertSuccess) {
            return view('addorgan');
        } else {
            return '<h1> Insert Failed</h1>';
        }
    }
}
