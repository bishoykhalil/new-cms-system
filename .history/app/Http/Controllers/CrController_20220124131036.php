<?php

namespace App\Http\Controllers;
use App\Models\Release;
use Illuminate\Http\Request;

class CrController extends Controller
{
    public function create(){
        $releases=Release::all();
        return view('admin.releases.crcreate',['releases'=>$releases]);
    }
    public function store(){
        $releases=Release::all();
        $inputs =   request()->validate([
            'cr_name',
            'system_id',
            
        ]);

        auth()->user()->crs()->create($inputs);
        return view('admin.releases.crstore',['releases'=>$releases]);
    }
}
