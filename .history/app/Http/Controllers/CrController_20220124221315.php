<?php

namespace App\Http\Controllers;
use App\Models\Release;
use Illuminate\Http\Request;
use App\Models\System;
use App\Models\Crs;

class CrController extends Controller
{
    public function create(){
        $releases=Release::all();
        return view('admin.releases.crcreate',['releases'=>$releases]);
    }
     public function store(Request $request){
       
        $inputs =   request()->validate([
         'release_id',
        'name',
         'status',
        'hasIOT',
         'hasE2E'
         ]);

       auth()->user()->crs()->create(request([
        'release_id',
        'name',
         'status',
        'hasIOT',
         'hasE2E'
       ]);
       
       // dd(request()->all());

      return('success');
    }
}
