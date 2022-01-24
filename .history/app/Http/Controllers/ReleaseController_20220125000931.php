<?php

namespace App\Http\Controllers;
use App\Models\System;
use App\Models\Release;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    public function create(){
        $releases=Release::all();
        $systems = System::all();
        return view('admin.releases.releasecreate',['systems'=>$systems,'releases'=>$releases]);
    }

    public function store(){
        $releases=Release::all();
        $systems = System::all();
        
        $inputs =   request()->validate([
            'release_name'=>'required',
            'status'=>'required',
            'system_id'=>'required'
        ]);
        auth()->user()->releases()->create($inputs);

        Session()->flash('release-created-message',$inputs['release_name'].' Created Successfully');
        return view('admin.releases.releasecreate',['systems'=>$systems,'releases'=>$releases]);
        
       
    }

    public function deactivate(Release $release){
       
        $releases=Release::all();
        $systems = System::all();

        $release->update([   'active'=>'0']    );


        dd(request()->all());
        
        //view('admin.releases.releasecreate',['systems'=>$systems,'releases'=>$releases]);

    }
}
