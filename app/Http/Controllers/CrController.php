<?php

namespace App\Http\Controllers;
use App\Models\Release;
use App\Models\User;
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
      $users = User::all();
      $crs=Crs::all();
        $releases=Release::all();
        return view('admin.releases.crcreate',['releases'=>$releases,'crs'=>$crs,'users'=>$users]);
    }
     public function store(Request $request){

        // $inputs =   request()->validate([
        //  'release_id'=>'required',
        // 'name'=>'required',
        //  'status'=>'required',
        // 'hasIOT'=>'required',
        //  'hasE2E'=>'required'
        //  ]);

        $CR = new Crs ;
        $CR->user_id = auth()->user()->id;
        $CR->release_id = $request->release_id;
        $CR->name = $request->name;
        $CR->status = $request->status;
        $CR->hasIOT = $request->hasIOT;
        $CR->hasE2E = $request->hasE2E;
        $CR->internal_support = $request->internal_support;
        $CR->external_support = $request->external_support;
        $CR->dependOn = $request->dependOn;
        $CR->uat_support = $request->uat_support;
        $CR->assinedTo = $request->assinedTo;
        $CR->save();
      //  auth()->user()->crs()->create(request([
      //   'release_id',
      //   'name',
      //   'status',
      //   'hasIOT',
      //   'hasE2E',
      //   'internal_support',
      //   'external_support',
      //   'dependOn',
      //   'uat_support',
      //   'assinedTo'
      //  ]));


       $crs=Crs::all();
       $releases=Release::all();
      Session()->flash('cr-created-message',$request['name'].' Created Successfully');
   //   return redirect()->route('cr.create',['releases'=>$releases,'crs'=>$crs]);
   return redirect()->back();
    }

    public function updateStatus (Request $request,Crs $cr){

      $cr->update(['status'=>$request->status]);
      Session()->flash('cr-changeStatus-message','CR Status Updated Successfully to '.$request['status']);
      return redirect()->back();
  }
}
