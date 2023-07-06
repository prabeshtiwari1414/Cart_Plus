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
    public function getGallery(){
        return view('site.galleries');
    }
}
