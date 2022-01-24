<?php

namespace App\Http\Controllers;
use App\Models\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    
  

   
    public function create(){
      
        return view('admin.releases.systemcreate');
    }

    public function store(){
        $systems = System::all();
        

        $inputs =   request()->validate([
            'name'=>'required',
            'vendor'=>'required'
        ]);

        auth()->user()->systems()->create($inputs);

        Session()->flash('system-created-message',$inputs['name'].' Created Successfully');
        return view('admin.releases.systemcreate',['systems'=>$systems]);
    }
}
