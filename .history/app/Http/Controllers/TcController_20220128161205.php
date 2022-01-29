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


    public function store(Crs $cr){
        
    
       $inputs= new  request([
            'crs_id'=>$cr->id,
            'name',
            'status',
            'scope'
       ]);
        auth()->user()->tcs()->saves($inputs);
    

       

    //    // Session()->flash('system-created-message',$inputs['name'].' Created Successfully');
       
        return redirect()->route('tc.create',['cr'=>$cr->id]);

   
   
    }

}
