<?php

namespace App\Http\Controllers;
use App\Models\Release;
use Illuminate\Http\Request;
use App\Models\System;
use App\Models\Crs;

class CrController extends Controller
{

public function show(){

  $crs = Crs::all();
  

}



    public function create(){
        $releases=Release::all();
        return view('admin.releases.crcreate',['releases'=>$releases]);
    }
     public function store(Request $request){
       
        $inputs =   request()->validate([
         'release_id'=>'required',
        'name'=>'required',
         'status'=>'required',
        'hasIOT'=>'required',
         'hasE2E'=>'required'
         ]);

       auth()->user()->crs()->create(request([
        'release_id',
        'name',
         'status',
        'hasIOT',
         'hasE2E'
       ]));
       
       $releases=Release::all();
       
       Session()->flash('cr-created-message',$inputs['name'].' Created Successfully');
      return view('admin.releases.crcreate',['releases'=>$releases]);
    }
}
