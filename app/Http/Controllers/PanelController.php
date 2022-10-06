<?php

namespace App\Http\Controllers;

use App\About;
use App\Banner;
use App\MainSlider;
use App\Section;
use App\Service;
use App\Strategy;
use App\Team;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PanelController extends Controller
{
    //
    public function teams(){
        $section=Section::where("name","teams")->first();
        $teams=Team::get();
    	return view('panel.teams',compact('teams','section'));
    }

    public function teamEdit(Team $team){
        return view('panel.partials.edit-team',compact('team'));
    }

    public function teamUpdate(Team $team, Request $request){
        $team->title=$request->get('title');
        $team->description=$request->get('description');
        $team->foot_title=$request->get('foot_title');
        if($request->image!=null){
            $fileName=time().$request->image->getClientOriginalName();
            $oldFileName=$team->image;
            Image::make($request->file('image'))->resize(444, 444)->save(public_path().'/teams/'.$fileName);
            $team->image=$fileName;
            try {
                unlink(public_path().'/teams/'.$oldFileName);
            }catch (\Exception $e){

            }
        }
        $team->save();
        return back()->with('success','Acción Realizada Correctamente');
    }

    public function strategies(){
        $section=Section::where("name","strategies")->first();
        $strategies=Strategy::get();
        return view('panel.strategies',compact('section','strategies'));
    }

    public function strategyEdit(Strategy $strategy){
        return view('panel.partials.edit-strategy',compact('strategy'));
    }

    public function strategyUpdate(Strategy $strategy, Request $request){
        $strategy->header=$request->get('header');
        $strategy->title=$request->get('title');
        if($request->image!=null){
            $oldFileName=$strategy->image;
            $fileName=time().$request->image->getClientOriginalName();
            Image::make($request->file('image'))->resize(370, 370)->save(public_path().'/strategies/'.$fileName);
            try {
                unlink(public_path().'/strategies/'.$oldFileName);
            }catch (\Exception $e){

            }
            $strategy->image=$fileName;
        }
        $strategy->save();
        return back()->with('success','Acción Realizada Correctamente');
    }

    public function serviceEdit(Service $service){
        return view('panel.partials.edit-service',compact('service'));
    }

    public function serviceUpdate(Service $service, Request $request){
        $service->title=$request->get('title');
        $service->description=$request->get('description');
        if($request->image!=null){
            $fileName=time().$request->image->getClientOriginalName();
            $oldFileName=$service->image;
            Image::make($request->file('image'))->resize(720, 830)->save(public_path().'/services/'.$fileName);
            try {
                unlink(public_path().'/services/'.$oldFileName);
            }catch (\Exception $e){

            }
            $service->image=$fileName;
        }
        $service->save();
        return back()->with('success','Acción Realizada Correctamente');
    }

    public function sectionEdit(Section $section){
        return view('panel.partials.edit-section',compact('section'));
    }

    public function sectionUpdate(Section $section, Request $request){
        $section->header=$request->get('header');
        $section->title=$request->get('title');
        $section->description=$request->get('description');
        $section->state=$request->get('state');
        if($request->image!=null){
            $fileName=time().$request->image->getClientOriginalName();
            $oldFileName=$section->image;
            if($section->name == 'about'){
                $width=1500;
                $height=550;
            }elseif($section->name == 'teams'){
                $width=1500;
                $height=860;
            }else{
                $width=80;
                $height=80;
            }
            Image::make($request->file('image'))->resize($width,$height)->save(public_path().'/sections/'.$fileName);
            $section->image=$fileName;
            try {
                unlink(public_path().'/sections/'.$oldFileName);
            }catch (\Exception $e){

            }
        }
        $section->save();
        return back()->with('success','Acción Realizada Correctamente');
    }

    public function about(){
        $section=Section::where("name","about")->first();
    	return view('panel.about',compact('section'));
    }

    public function aboutUpdate(About $about, Request $request){
        $about->update($request->all());
        return back()->with('success','Acción Realizada Correctamente');
    }

    public function history(){
        $history=About::where('code','history')->get();
        $section=Section::where("name","history")->first();
    	return view('panel.history',compact('history','section'));
    }

    public function historyEdit(About $about){
        return view('panel.partials.edit-history',compact('about'));
    }

    public function enterprise(){
        $mision=About::where('code','mision')->first();
        $vision=About::where('code','vision')->first();
        $principles=About::where('code','principle')->get();
        $objetives=About::where('code','objetive')->get();
        $section=Section::where("name","enterprise")->first();
        $book=Section::where("name","book")->first();
    	return view('panel.enterprise',compact('mision','vision','principles','objetives','section',"book"));
    }

    public function enterpriseEdit(About $about){
        return view('panel.partials.edit-enterprise',compact('about'));
    }

    public function statistic(){
        $statisticsn=About::where('code','statisticn')->get();
        $statistics=About::where('code','statistic')->get();
        $section=Section::where("name","statistic")->first();
    	return view('panel.statistics',compact('statistics','statisticsn','section'));
    }

    public function statisticEdit(About $about){
        return view('panel.partials.edit-statistic',compact('about'));
    }

    public function contact(){
        $section=Section::where("name","contact")->first();
        return view('panel.contact',compact('section'));
    }

    public function services(){
        $services = Service::orderByDesc("created_at")->get();
        $section=Section::where("name","services")->first();
    	return view('panel.services',compact("services","section"));
    }

    public function banners(){
        $banners=Banner::get();
        return view('panel.banners',compact('banners'));
    }

    public function bannerEdit(Banner $banner){
        return view('panel.partials.edit-banner',compact('banner'));
    }

    public function bannerUpdate(Banner $banner, Request $request){
        $banner->header=$request->header;
        $banner->title=$request->title;
        if($request->file!=null){
            if($banner->type=="image"){
                $fileName=time().$request->file->getClientOriginalName();
                $oldFileName=$banner->file;
                Image::make($request->file('file'))->resize($banner->width, $banner->height)->save(public_path().'/banners/'.$fileName);
                $banner->file=$fileName;
            }else{
                $fileName=time().$request->file->getClientOriginalName();
                $oldFileName=$banner->file;
                $request->file->move(public_path().'/banners', time().$request->file->getClientOriginalName());
                $banner->file=$fileName;
            }
            try {
                unlink(public_path().'/banners/'.$oldFileName);
            }catch (\Exception $e){

            }
        }
        $banner->save();
        return back()->with('success','Acción Realizada Correctamente');
    }

    public function complaintsBook(Request $request){
        if($request->file!=null){
            $request->file->move(public_path().'/book/', "book.pdf");
        }

        $section = Section::where("name","book")->first();
        $section->state=$request->get('state');
        $section->save();
        return back()->with('success','Acción Realizada Correctamente');

    }
}
