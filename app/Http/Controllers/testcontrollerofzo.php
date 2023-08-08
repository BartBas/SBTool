<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PartsDump;
use App\Models\TestModel;
use Illuminate\Http\Request;

class testcontrollerofzo extends Controller
{
    public function ShipDump(){
        return view('ShipDump',['table' => TestModel::all()->toArray()]);
    }
    public function PartsDump(){
        return view('PartsDump',['table' => PartsDump::all()->toArray()]);
    }
}
