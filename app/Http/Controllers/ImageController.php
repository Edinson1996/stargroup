<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as InterventionImage;

class ImageController extends Controller
{
    //
    public function index(){
        $clients=Image::where("code","clients")->get();
        return view('panel.clients.index',compact('clients'));
    }

    public function edit(Image $image){
        return view('panel.clients.edit',compact('image'));
    }

    public function create(){
        return view('panel.clients.create');
    }

    public function store(Request $request){
        $image = new Image();
        $image->code=$request->get('code');
        if($request->file('name')!=null){
            $fileName=time().$request->name->getClientOriginalName();
            InterventionImage::make($request->file('name'))->resize(225, 110)->save(public_path().'/images/'.$fileName);
            $image->name=$fileName;
        }
        $image->save();
        return back()->with('success','Acción Realizada Correctamente');
    }

    public function update(Image $image, Request $request){
        $image->code=$request->get('code');
        if($request->name!=null){
            $oldFileName=$image->name;
            $fileName=time().$request->name->getClientOriginalName();
            InterventionImage::make($request->file('name'))->resize(225, 110)->save(public_path().'/images/'.$fileName);
            try {
                unlink(public_path().'/images/'.$oldFileName);
            }catch (\Exception $e){

            }
            $image->name=$fileName;
        }
        $image->save();
        return back()->with('success','Acción Realizada Correctamente');
    }

    public function destroy(Image $image){
        $image->delete();
        return back()->with('success','Acción Realizada Correctamente');
    }
}
