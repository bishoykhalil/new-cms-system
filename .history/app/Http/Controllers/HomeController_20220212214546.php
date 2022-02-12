<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Crs;
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

        $crs = auth()->user()->crs;
        $tcs = Tc::where('crs_id',$cr->id)->get();
        return view('home',['crs'=>$crs,'tcs'=>$tcs]);
      
      }
}
