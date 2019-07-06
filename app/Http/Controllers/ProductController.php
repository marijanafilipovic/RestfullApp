<?php

namespace App\Http\Controllers;
use App\Product;
use App\Http\Resources\Product\ProductCollection;
use Illuminate\Http\Request;
use App\Http\Resources\Product\ProductResource;

class ProductController extends Controller
{
    //
   public function index(){
      // return Product::all();
       return ProductCollection::collection(Product::paginate(6));

   }

   public function show(Product $product){
      // return $product;
          return  new ProductResource($product);
    //   $result= array();
      // $result  = new ProductResource($product);
      // dd($result);
      // $result = json_decode($res);
    //   return view('product.show', 'ProductController@show')->with('result', $result);

       //$product =  Product::find($id );
       //return view('products.show', 'ProductController@show')->with('product', $product);
   }
}
