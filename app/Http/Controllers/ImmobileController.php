<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Immobile;
use App\Models\Operation;
use App\Models\ImmobileImage;
class ImmobileController extends Controller
{
         
    public function uploadImages($immobileId,Request $request)
    {
 
        
        $immobile=Immobile::find($immobileId);
 
        //        image upload
        $image=$request->file('file');

        if($image){
            $imageName=time(). $image->getClientOriginalName();
            $image->move('images',$imageName);
            $imagePath= "/images/$imageName";
            $immobile->images()->create(['image_path'=>$imagePath]);
        }


        return "done";
        // Product::create($formInput);
    } 
     public function __construct()
    {
        $this->middleware('auth');
    } 
    public function index(Request $request)
    {
         
        $operations=Operation::all();
        if($request->has('titlesearch')){
            $immobiles = Immobile::search($request->titlesearch)
                ->paginate(6);
        }else{
            $immobiles = Immobile::paginate(6);
        }
        return view('admin.immobile.index',compact('immobiles', 'operations'));

    }
    
    public function inicio()
    {
        $immobiles = Immobile::latest()->paginate(5);
        return view('immobiles.index',compact('immobiles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ops = Operation::all();
        $operations=Operation::pluck('name','id');
        return view('admin.immobile.create', compact('operations', 'ops'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
        ]);
        Immobile::create($request->all());
        return redirect()->route('immobile.index')
                        ->with('success','immobile created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $immobile = Immobile::find($id);
        return view('admin.immobile.show',compact('immobile'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $operations=Operation::pluck('name','id');
        $immobile = Immobile::find($id);
        return view('admin.immobile.edit',compact(['immobile', 'operations']));
    } 


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {
        $immobile=Immobile::find($id);
        $formInput=$request->except('image');
         $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }
         $immobile->update($formInput);
        return redirect()->route('immobile.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function destroy($id)
    {
        Immobile::destroy($id);
        return back();
    }
}
 