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




public function index(){

  $crs = auth()->user()->crs;
  return view('home',['crs'=>$crs]);

}


    public function create(){
      $crs=Crs::all();
        $releases=Release::all();
        return view('admin.releases.crcreate',['releases'=>$releases,'crs'=>$crs]);
    }
     public function store(Request $request){

        // $inputs =   request()->validate([
        //  'release_id'=>'required',
        // 'name'=>'required',
        //  'status'=>'required',
        // 'hasIOT'=>'required',
        //  'hasE2E'=>'required'
        //  ]);

       auth()->user()->crs()->create(request([
        'release_id',
        'name',
        'status',
        'hasIOT',
        'hasE2E',
        'internal_support',
        'external_support',
        'dependOn'
       ]));


       $crs=Crs::all();
       $releases=Release::all();
      Session()->flash('cr-created-message',$request['name'].' Created Successfully');
      return redirect()->route('cr.create',['releases'=>$releases,'crs'=>$crs]);
    }

    public function updateStatus (Cr $cr){
      $tc->update(['status'=>$request->status]);
      return redirect()->route('cr.create');
  }
}
