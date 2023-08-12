<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getproduct(){
        return view('admin.product.addproduct');
    }
    public function postAddProduct(Request $request){

       
        $category           =   $request->category;
        $product_title      =   $request->product_name;
        $product_cost       =      $request->product_cost;
        $product_status     =    $request->product_status;

        $product_details    =   $request->product_details;
        $photo              =   $request->photo;
       
        if($photo){
            //generate unique name for photo
            $time=md5(time()).'.'.$photo->getClientOriginalExtension();
             // to move photo into folder
            $photo->move('site/uploads/product/',$time);
            
             // dd($photo);
        }
        else{
             $time=Null;
        }
             $product=new Product;
             $product->category                =   $category;
             $product->product_title           =   $product_title;
             $product->product_cost            =   $product_cost;
             $product->status          =   $product_status;
             $product->product_details         =   $product_details;
             $product->photo                   =   $time;
             $product->save();
            dd('save');          //  dd($time);
    }
}