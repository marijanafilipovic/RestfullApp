<?php

namespace App\Http\Controllers;
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Review\ReviewResource;
use App\Product;
use Illuminate\Http\Request;
use Resource;
use App\Review;
use App\Http\Requests\ReviewRequest;
use Symfony\Component\HttpFoundation\Response;

class ReviewsController extends Controller
{
   public function index(Product $product)
{
   return ReviewResource::collection($product->review);
    //return $product->review;
   // return  Review::all();
}
    public function store(ReviewRequest $request, Product $product)
    {
        $review = new Review($request->all());
        $product->review()->save($review);
        return response([
            'data' => new ReviewResource($review)
        ], Response::HTTP_CREATED 
        );
        /*   $review = new Review();
           $review->customer = $request->customer;
           $review->review = $request->review;
           $review->product_id = $product->id;
           $review->star = 5;
           $review->save();
           return  $review;
        */
    }
}
