<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrController extends Controller
{
    public function create(){

        return view('admin.releases.crcreate');
    }
}
