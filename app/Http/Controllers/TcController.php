<?php

namespace App\Http\Controllers;

use App\Models\Crs;
use App\Models\Tc;
use App\Models\Comment;
use Illuminate\Http\Request;

class TcController extends Controller
{
    //

    public function  show(Crs $cr){
        $tcs = Tc::all();
        $comments = Comment::where('cr_id',$cr->id)->get();        
        //where(id,$cr->id);
        return view('cr-tc',['cr'=>$cr,'tcs'=>$tcs,'comments'=>$comments]);
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


        Session()->flash('cr-creat-message',$Tc->name.' Created Successfully');
if ($view_name == 'cr-tc'){
    return redirect()->route('tc.show',['cr'=>$cr,'tcs'=>$tcs]);
  }else {
    return redirect()->route('tc.create',['cr'=>$cr]);
}

}

public function updateStatus (Request $request,Tc $tc ){
    $tc->update($request->only([$request->status=>'status']));
    $tc->update($request->only([$request->scope=>'scope']));
    $cr= Crs::all()->where('id',$tc->crs_id);


    Session()->flash('tc-updated-message',$tc->name.' Status updated Successfully');
    return redirect()->back();

}
}

