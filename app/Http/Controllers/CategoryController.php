<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories/createCategory');
    }

    public function storeCategory(Request $request){
        $data= new Category();
        $data['name']= $request->name;
        $data['type']= $request->type;
        $data->save();
        return redirect()->route('createCategory');
    }
}
