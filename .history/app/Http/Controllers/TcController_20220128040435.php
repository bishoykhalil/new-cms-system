<?php

namespace App\Http\Controllers;

use App\Models\Crs;
use Illuminate\Http\Request;

class TcController extends Controller
{
    //
    public function  create(Crs $cr){
     
        return view('admin.releases.tcadd',['crName'=>$cr->name]);
    }


    public function store(Crs $cr){
        $systems = System::all();
        

        $inputs =   request()->validate([
            'name',
            'status',
            'cr_id'=>$cr->id,
            'scope'
        ]);

        auth()->user()->systems()->create($inputs);

        Session()->flash('system-created-message',$inputs['name'].' Created Successfully');
       
        return redirect()->route('system.create',['systems'=>$systems]);
    }

}
