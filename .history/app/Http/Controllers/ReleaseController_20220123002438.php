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

    public function store(){
        
        $inputs =   request()->validate([
            'release_name',
            'Status'=>'required',
            'system_id'=>'required'
        ]);

        auth()->user()->releases()->create($inputs);

        Session()->flash('release-created-message',$inputs['release_name'].' Created Successfully');
        return view('admin.releases.releasecreate');
    }
}
