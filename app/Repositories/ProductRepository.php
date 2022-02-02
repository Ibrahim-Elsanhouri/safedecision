<?php 

namespace App\Repositories; 
use App\Models\Product; 
use App\Repositories\ProductInterface; 

use Illuminate\Http\Request;
use App\Repositories\ProductRepository; 
use App\Http\Requests\ProjectsRequest;
use Illuminate\Support\Facades\Auth;





class ProductRepository implements ProductInterface{


    public function all()
    {
        return Product::all();
    }


    public function show($id){
        return Product::find($id); 
    }


    public function store(array $data)
    {
      return   Product::create($data);
    }

}