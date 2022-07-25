<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        $categoryData['data'] = Category::orderby("name","asc")
        ->select('id','name')
        ->get();
        // dd($categoryData['data']);
        return view('products/createProduct')->with("categoryData",$categoryData);
    }

    public function storeProduct(Request $request){
        
        $data= new Product();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
            $data['category_id']= $request->category_id;
            $data['product_name']= $request->product_name;
            $data['description']= $request->description;
            $data['stock']= $request->stock;
            $data['price']= $request->price;
        }
        $data->save();
        return redirect()->route('createProduct');
       
    }

}
