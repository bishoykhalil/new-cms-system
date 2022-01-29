<?php

namespace App\Http\Controllers;

use App\Models\Crs;
use Illuminate\Http\Request;

class TcController extends Controller
{
    //
    public function  create(Crs $cr){

        $crName = Crs::findOrnot($cr->id)->name;
        return view('admin.releases.tcadd');
    }
}
