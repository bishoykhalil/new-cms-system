<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    //
    public function index()
    {
        $systems = System::all();
        return view('admin.release.index',['posts'=>$posts]);
    }
}
