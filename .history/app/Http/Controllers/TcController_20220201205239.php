<?php

namespace App\Http\Controllers;

use App\Models\Crs;
use App\Models\Tc;
use Illuminate\Http\Request;

class TcController extends Controller
{
    //

    public function  show(Crs $cr){
        $tcs = Tc::all();
        return view('cr-tc',['cr'=>$cr,'tcs'=>$tcs]);
    }




    public function  create(Crs $cr){
        $tcs = Tc::all();
        return view('admin.releases.tcadd',['cr'=>$cr,'tcs'=>$tcs]);
    }


    public function store(Request $request,Crs $cr,$view_name){
     
        $crs= Crs::all();
        $tcs = Tc::all();
        $Tc = new Tc;

        $Tc->crs_id =$cr->id;
        $Tc->user_id = auth()->user()->id;
        $Tc->name = $request->name;
        $Tc->status = $request->status;
        $Tc->scope = $request->scope;
        $Tc->save();
            
     
       
if ($view_name == 'cr-tc'){
    return redirect()->route('tc.show',['cr'=>$cr,'tcs'=>$tcs]);
  }else {
    return redirect()->route('tc.create',['cr'=>$cr]);
}
     
}

public function updateStatus (Tc $tc){
    $tc->update(['status'=>$request->status]);
    return redirect()->route('tc.create');
}

}

