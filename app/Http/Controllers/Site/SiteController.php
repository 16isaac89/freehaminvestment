<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('site.faq');
    }
    public function team(){
        return view('site.team');
    }
    public function signin(){
        return view('member.auth.signin');
    }
}
