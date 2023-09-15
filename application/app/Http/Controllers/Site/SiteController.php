<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Faq;

class SiteController extends Controller
{
    public function index(){
        return view('site.index');
    }
    public function about(){
        return view('site.about');
    }
    public function contact(){
        return view('site.contact');
    }
    public function faq(){
        $faqs = Faq::all();
        return view('site.faq',compact('faqs'));
    }
    public function team(){
        $teams = Team::all();
        return view('site.team',compact('teams'));
    }
    public function signin(){
        return view('member.auth.signin');
    }
    public function signup(){
        return view('member.auth.signup');
    }
}
