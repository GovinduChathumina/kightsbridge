<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    public function index()
    {
        return view('sellers/createSeller');
    }

    public function storeSeller(Request $request){
        
        $data= new Seller();

            $data['name']= $request->name;
            $data['store_name']= $request->store_name;
            $data->save();
            return redirect()->route('createSeller');
        }
       
}
