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


    public function store(Request $request,Crs $cr){
     
        $crs= Crs::all();
        $Tc = new Tc;

        $Tc->crs_id =$cr->id;
        $Tc->user_id = auth()->user()->id;
        $Tc->name = $request->name;
        $Tc->status = $request->status;
        $Tc->scope = $request->scope;
        $Tc->save();
              
        view()->composer('*', function($view){
            $view_name = str_replace('.', '-', $view->getName());

if ($view_name == 'tc.create'){
    return redirect()->route('tc.create',['cr'=>$cr]);
}else {
    return redirect()->route('cr-tc',['cr'=>$cr,'tcs'=>$tcs])));
}

     
    }

}
