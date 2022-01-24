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

        $inputs =  [
            'cr_name',
            'status',
            'system_id',
            'hasIOT',
            'hasE2E'

        ];
         auth()->user()->crs()->create($inputs);
        return view('admin.releases.crcreate',['crs'=>inputs,'releases'=>$releases]);
    }
}
