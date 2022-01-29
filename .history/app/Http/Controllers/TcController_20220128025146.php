<?php

namespace App\Http\Controllers;

use App\Models\Crs;
use Illuminate\Http\Request;

class TcController extends Controller
{
    //
    public function  create(Crs $cr){

        
        return view('admin.releases.tcadd',['crName'=>$cr->name]);
    }
}
