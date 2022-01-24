<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function create(){
      
        return view('admin.releases.releasecreate');
    }
}
