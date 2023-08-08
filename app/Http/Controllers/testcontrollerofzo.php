<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TestModel;
use Illuminate\Http\Request;

class testcontrollerofzo extends Controller
{
    public function test(){
        return view('Newpage',['table' => TestModel::all()->toArray()]);
    }

}
