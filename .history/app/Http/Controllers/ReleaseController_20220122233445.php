<?php

namespace App\Http\Controllers;
use App\Models\System;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function create(){
      
        $systems = System::all();
        return view('admin.releases.releasecreate',['systems'=>$systems]);
    }
}
