<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function create(){
        $systems = System::all();
        return view('admin.releases.systemcreate',['systems'=>$systems]);
    }
}
