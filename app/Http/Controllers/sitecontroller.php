<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getTemplate()
    {
        return view('site.template');
    }
    public function getHome()
    {
        return view('site.home');
    }
    public function getAbout()
    {
        return view('site.about');
    }
    public function getContact(){
        return view('site.contact');
    }
    
    public function getShop(){
        return view('site.shop');
    }
    public function getFeatures(){
        return view('site.features');
    }
    public function getBlog(){
        return view('site.blog');
    }
}