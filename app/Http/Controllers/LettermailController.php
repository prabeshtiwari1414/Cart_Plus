<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lettermail;

class LettermailController extends Controller
{
    public function getLettermailController(){
       
        return view('user.home');
    }
    public function postLettermailController(Request $request){
        // $lettermail=new lettermail;
        // $lettermail=$request->lettermail;
        // $lettermail->lettermail=$lettermail;
        // $lettermail->save();


        $lettermail = new lettermail;
        $lettermail->lettermail     =       $request->lettermail;
        // $lettermail->lettermail     =       $request->lettermail;
        $lettermail->save();

        // return $request;
    }
}