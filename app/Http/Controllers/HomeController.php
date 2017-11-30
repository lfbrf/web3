<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Immobile;
use App\Models\ImmobileImage;
class HomeController extends Controller
{ 
    /**
     * Create a new controller instance.
     *
     * @return void
     */ 

    public function welcome(){

         $immobiles = Immobile::latest()->paginate(5);
        return view('welcome',compact('immobiles'))
            ->with('i', (request()->input('page', 1) - 1) * 5, 'images');
    }
   public function show($id){
         $immobile = Immobile::find($id);
        return view('propertydetail',compact('immobile'));
   }
   public function about (){
        return view('propertydetail');
   }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        return view('admin');
    }
    public function propertydetail(){
        return view ('propertydetail');
    }
    public function details()
    {
        return view('property-detail');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function allUsers()
    {
        dd('Access All Users');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminSuperadmin()
    {
        dd('Access Admin and Superadmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function superadmin()
    {
        dd('Access only Superadmin');
    }
}