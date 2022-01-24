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
    public function store(){
        $inputs =   request()->validate([
            // 'name',
            // // 'release_id',
            'status'

        ]);

        Crs::create($inputs);

      return('success');
    }
}
