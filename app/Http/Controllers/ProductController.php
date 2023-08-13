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
            return redirect()->route('getManageProduct');    
            //  dd($time);
    }
    public function getManageProduct()
    {
        $data = [
            'products' => product::latest()->get(),
        ];
       
        return view('admin.product.manageproduct',['products' => product::paginate(5)]); 
    }
    public function getDeleteProduct (Product $product)
    {
        
        $product->delete();
       return redirect()->route('getManageProduct');
    

    }
   
    public function getEditProduct(Product $product)
    {
      
              return view('admin.product.editproduct', ['product' => $product]);
    }
    
    public function postEditProduct(Request $request, Product $product){
                $photo = $request->file('photo');
                $product->category = $request->input('category');
                $product->product_title = $request->input('product_title');
                $product->product_cost = $request->input('product_cost');
                $product->product_details = $request->input('product_details');
                $product->status = $request->input('product_status');
            if($photo){
    
                $time=md5(time()).'.'.$photo->getClientOriginalExtension();
                $photo->move('site/uploads/product/',$time);
                
                $product->photo = $time;
              
            }
            $product->save();

           
            return redirect()->route('getManageProduct');    
    }
}