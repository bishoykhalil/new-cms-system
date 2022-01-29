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


    public function store($id){
        // $systems = System::all();
        

    //     auth()->user()->tcs()->create(request([
    //         'name',
    //         'status',
    //         'cr_id'=>$cr->id,
    //         'scope'
    //        ]));
    

       

    //    // Session()->flash('system-created-message',$inputs['name'].' Created Successfully');
       
    //     return redirect()->route('tc.create');

    echo "success" ;
       // return($cr->id);
   
    }

}
