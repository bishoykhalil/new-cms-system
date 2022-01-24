<?php

namespace App\Http\Controllers;
use App\Models\System;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function create(){
      
        $systems = System::pluck('name','id')->all();
        return view('admin.releases.releasecreate',compact('systems'));
    }
}
