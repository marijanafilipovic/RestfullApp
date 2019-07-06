<?php

namespace App\Http\Controllers;
use App\Product;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\Product\ProductCollection;
use Illuminate\Http\Request;
use App\Http\Resources\Product\ProductResource;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth:api')->except('index', 'show');
    }
   public function index(){
      // return Product::all();
       return ProductCollection::collection(Product::paginate(6));
   }
   public function update(Request $request, Product $product){
       // return $request->all();
       $product->description = $request->descripton;
       unset($request->description);
       $product->update($request->all());
      return response([
         'data' => new ProductResource($product)
      ], Response::HTTP_CREATED);
       // return $product;
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

   public function store(ProductRequest $request){
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->slug = $request->slug;
        $product->save();
           return response([
               'data' => new ProductResource($product)
           ], Response::HTTP_CREATED);
    }
   public function destroy(Product $product){
       $product->delete();
       return response(
           null, Response::HTTP_NO_CONTENT
       );
   }
}
