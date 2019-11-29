<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $slider=Slider::get();
        return view('frontend.index')->with('slider',$slider);
    }
    public function about(){
        $team=Team::get();
        return view('frontend.about_us')->with('team',$team);
    }
    public function causes(){
        return view('frontend.causes');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function contact(){
        return view('frontend.contact');
    }
}
