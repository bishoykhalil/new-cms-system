<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TcController extends Controller
{
    //
    public function  create(Cr $cr){
        return view('admin.releases.tcadd');
    }
}
