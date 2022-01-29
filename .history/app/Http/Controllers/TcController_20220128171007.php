<?php

namespace App\Http\Controllers;

use App\Models\Crs;
use App\Models\Tc;
use Illuminate\Http\Request;

class TcController extends Controller
{
    //
    public function  create(Crs $cr){
     
        return view('admin.releases.tcadd',['cr'=>$cr]);
    }


    public function store(Request $request,$id){
        
        $crs= Crs::all();
        $Tc = new Tc;

        $Tc->crs_id =$id;
        $Tc->user_id = auth()->user()->id;
        $Tc->name = $request->name;
        $Tc->status = $request->status;
        $Tc->scope = $request->scope;
        $Tc->save();
      
        // auth()->user()->tcs()->create(request([
        //     'crs_id'=>$id,
        //         'name',
        //         'status',
        //         'scope'
        //    ]));
    

       

    //    // Session()->flash('system-created-message',$inputs['name'].' Created Successfully');
       
     return redirect()->route('tc.create',['crs'=>$crs]);

   
   
    }

}
