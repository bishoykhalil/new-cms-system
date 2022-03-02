<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Tc;
use Illuminate\Http\Request;
use App\Models\Crs;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function  show(Crs $cr){
        $tcs = Tc::where('crs_id',$cr->id)->get();
        $comments = Comment::where('cr_id',$cr->id)->get();        
        return view('cr-tc',['cr'=>$cr,'tcs'=>$tcs,'comments'=>$comments ]);
    }

    public function index(){
      //  
        $crs =Crs::where('assinedTo',auth()->user()->id)->get();
        $tcs = Tc::all();
        $users = User::all();
        return view('home',['crs'=>$crs,'tcs'=>$tcs,'users'=>$users]);
      }
}
