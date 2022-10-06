<?php

namespace App\Http\Controllers;

use App\MainSlider;
use Illuminate\Http\Request;
use App\Section;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    //
    public function index(){
        $sliders=MainSlider::get();
        return view('panel.sliders.index',compact('sliders'));
    }

    public function edit(MainSlider $slider){
        return view('panel.sliders.edit',compact('slider'));
    }

    public function create(){
        return view('panel.sliders.create');
    }

    public function store(Request $request){
        $slider = new MainSlider();
        $slider->title=$request->get('title');
        $slider->button_title=$request->get('button_title');
        $slider->button_url=$request->get('button_url');
        $oldFileName=$slider->image;
        if($request->image!=null){
            $fileName=time().$request->image->getClientOriginalName();
            Image::make($request->file('image'))->resize(1920, 1080)->save(public_path().'/slider/'.$fileName);
            try {
                unlink(public_path().'/slider/'.$oldFileName);
            }catch (\Exception $e){

            }
            $slider->image=$fileName;
        }
        $slider->save();
        return back()->with('success','Acción Realizada Correctamente');
    }

    public function update(MainSlider $slider, Request $request){
        $slider->title=$request->get('title');
        $slider->button_title=$request->get('button_title');
        $slider->button_url=$request->get('button_url');
        $oldFileName=$slider->image;
        if($request->image!=null){
            $fileName=time().$request->image->getClientOriginalName();
            Image::make($request->file('image'))->resize(1920, 1080)->save(public_path().'/slider/'.$fileName);
            try {
                unlink(public_path().'/slider/'.$oldFileName);
            }catch (\Exception $e){

            }
            $slider->image=$fileName;
        }
        $slider->save();
        return back()->with('success','Acción Realizada Correctamente');
    }

    public function destroy(MainSlider $slider){
        $slider->delete();
        return back()->with('success','Acción Realizada Correctamente');
    }
}
