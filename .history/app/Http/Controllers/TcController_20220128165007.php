<?php

namespace App\Http\Controllers;

use App\Models\Crs;
use Illuminate\Http\Request;

class TcController extends Controller
{
    //
    public function  create(Crs $cr){
     
        return view('admin.releases.tcadd',['cr'=>$cr]);
    }


    public function store(Request $request,$id){
        
  
      
        auth()->user()->tcs()->create($request([
            'crs_id'=>$id,
                'name',
                'status',
                'scope'
           ]));
    

       

    //    // Session()->flash('system-created-message',$inputs['name'].' Created Successfully');
       
     //   return redirect()->route('tc.create',['cr'=>$cr->id]);
return"SUCCESS";
   
   
    }

}
