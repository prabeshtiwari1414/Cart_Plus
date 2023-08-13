<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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
        $data= [
            'products' => Product::where('status', 'show')->latest()->limit(8)->get(),
            
        ];
        return view('site.shop', $data);
    }
    public function getFeatures(){
        return view('site.features');
    }
    public function getBlog(){
        return view('site.blog');
    }
}