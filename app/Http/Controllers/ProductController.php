<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository; 
use App\Models\Product; 
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest; 

class ProductController extends Controller


{
    //
    public $product; 

    public function __construct(ProductRepository $product){

        $this->product = $product; 
        $this->middleware('admin')->only('store');
    }

    public function index(){
        $products =   $this->product->all();
     return $products;
         }


    public function store(ProductRequest $request){

        $product = $this->product->store($request); 
        return $product; 

      
    }


    public function filter(ProductRequest $request){
        $params = $request->except('_token');
         $products = Product::filter($params)->get();
          return $products; 

    }




   
}
//
