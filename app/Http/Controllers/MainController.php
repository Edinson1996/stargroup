<?php

namespace App\Http\Controllers;

use App\About;
use App\Banner;
use App\CategoryPost;
use App\Post;
use App\MainSlider;
use App\Image;
use App\Product;
use App\Section;
use App\Service;
use App\Strategy;
use App\Team;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function home(){
        $sliders = MainSlider::get();
        $teams = Team::get();
        $teamsSection=Section::where("name","teams")->first();
        $services = Service::orderByDesc('id')->take(3)->get();
        $serviceSection=Section::where("name","services")->first();
        $strategies = Strategy::get();
        $strategySection=Section::where("name","strategies")->first();
        $products=Product::where('offer',true)->take(6)->get();
        $clients=Image::where("code","clients")->get();
        $book=Section::where("name","book")->first()->state;
        return view('page.index',compact('sliders','strategySection','strategies','services','serviceSection','teams','teamsSection','products','clients',"book"));
    }

    public function about(){
        $historySection=Section::where("name","history")->first();
        $history=About::where('code','history')->get();
        $mision=About::where('code','mision')->first();
        $vision=About::where('code','vision')->first();
        $principles=About::where('code','principle')->get();
        $objetives=About::where('code','objetive')->get();
        $statisticsn=About::where('code','statisticn')->get();
        $statistics=About::where('code','statistic')->get();
        $statisticSection=Section::where("name","statistic")->first();
        $aboutSection=Section::where("name","about")->first();
        $enterpriseSection=Section::where("name","enterprise")->first();
        $banner = Banner::where("code","about")->first();
        $book=Section::where("name","book")->first()->state;
        return view('page.about',compact('aboutSection','historySection','history','mision','vision','principles','objetives','statistics','statisticsn','enterpriseSection','statisticSection',"banner","book"));
    }

    public function services(){
        $services = Service::get();
        $banner = Banner::where("code","services")->first();
        $book=Section::where("name","book")->first()->state;
        return view('page.services',compact('services',"banner","book"));
    }

    public function catalog(){
        $products = Product::where('offer',0)->orderByDesc('created_at')->paginate(20);
        $sales = Product::where('offer',1)->take(8)->get();
        $book=Section::where("name","book")->first()->state;
        return view("page.catalog",compact("products","sales","book"));
    }

    public function blog(Request $request){
        $banner = Banner::where("code","blog")->first();
        $data=$request->validate([
            'category'=>'filled|exists:category_posts,id'
        ]);
        $posts=Post::query()
            ->when($request->category, function ($query, $category){
            $query->where('category_id',$category);
            })
            // ->where("title","like","%$this->search%")
            ->orderByDesc("created_at")
            ->paginate(12)
            ->withQueryString();;
        $categories = CategoryPost::get();
        $total=count(Post::get());
        $book=Section::where("name","book")->first()->state;
        return view('page.blog',compact("posts","categories","total","banner","book"));
    }

    public function blogSingle(Post $post){
        $categories = CategoryPost::get();
        $relatedPosts=Post::take(3)->get();
        $book=Section::where("name","book")->first()->state;
        return view('page.blog-single',compact('post','relatedPosts','categories',"book"));
    }

    public function contact(){
        $banner = Banner::where("code","contact")->first();
        $book=Section::where("name","book")->first()->state;
        return view('page.contact',compact("banner","book"));
    }
}
