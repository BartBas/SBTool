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
    public function testSelect(){
        return view('testSelect',['table' => TestModel::all()->toArray(),'names' => TestModel::all()->only('EN')]);
    }
    public function PartsDump(){
        return view('PartsDump',['table' => PartsDump::all()->toArray()]);
    }
}
