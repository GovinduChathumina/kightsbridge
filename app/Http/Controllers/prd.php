<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseOrder;
use App\Models\Merchant;
use App\Models\Supplier;
use App\Models\Store;
use App\Models\Variant;
use App\Models\Product;
use App\Models\Batch;

class PurchaseOrderController extends Controller
{
    public function index()
    {
        // Fetch merchants
        $merchants['data'] = Merchant::orderby("customer_fname","asc")
        ->select('id','customer_fname')
        ->get();

        // Fetch merchants
        $suppliers['data'] = Supplier::orderby("legal_name","asc")
        ->select('id','legal_name')
        ->get();

        // Fetch serial no
        $lastSerialNo = PurchaseOrder::latest()->first();
        $serialNo = $lastSerialNo->id+1;

        // Fetch stores
        $stores['data'] = Store::orderby("name","asc")
        ->select('id','name')
        ->get();

        // Fetch products
        $products['data'] = Product::orderby("product_name","asc")
        ->select('id','product_name')
        ->get();

        // Load index view
        return view('PurchaseOrders/purchaseOrder')
        ->with("merchants",$merchants)
        ->with("suppliers",$suppliers)
        ->with("serialNo",$serialNo)
        ->with("stores",$stores)
        ->with("products",$products);
    }

    // Fetch supplier records by id
    public function getSuppliers($supplierId=0){

        // Fetch supplier by supplierId
        $supplierData['data'] = Supplier::orderby("legal_name","asc")
        ->select('id','legal_name','address','contact_no','email')
        ->where('id',$supplierId)
        ->get();
        
        return response()->json($supplierData);

    }

    // Fetch varient records by id
    public function getVarients($productId=0){

        // Fetch varient by productId
        $varientData['data'] = Variant::orderby("productName","asc")
        ->select('id','productName')
        ->where('id',$productId)
        ->get();
        
        return response()->json($varientData);

    }

    // Fetch varient latest price records by id
    public function getVariantPrice($variantId=0){

        // Fetch varient by varientId
        $varientPrice['data'] = Batch::latest()
        ->where('variant_id',$variantId)
        ->get();
        
        return response()->json($varientPrice);

    }
}
