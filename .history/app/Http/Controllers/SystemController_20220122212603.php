<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    
    public function index()
    {
        $systems = System::all();
        return view('admin.releases.systemcreate',['systems'=>$posts]);
    }

    public function create(){

        return view('admin.releases.systemcreate');
    }

    public function store(){
        $inputs =   request()->validate([
            'name'=>'required',
            'vendor'=>'required'
        ]);

        auth()->user()->systems()->create($inputs);

        Session()->flash('system-created-message',$inputs['name'].' Created Successfully');
        return redirect()->route('system.create');
    }
}
