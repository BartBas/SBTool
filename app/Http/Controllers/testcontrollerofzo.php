<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testcontrollerofzo extends Controller
{
    public function test(){
        return view('Newpage',['test0' => 5,'test1' => 4,'test2' => 3]);
    }

}
