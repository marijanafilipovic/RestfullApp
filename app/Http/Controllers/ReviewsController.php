<?php

namespace App\Http\Controllers;
use App\Http\Resources\ReviewResource;
use App\Product;
use Illuminate\Http\Request;
use Resource;
use App\Review;

class ReviewsController extends Controller
{
   public function index(Product $product)
{
   return ReviewResource::collection($product->review);
    //return $product->review;
   // return  Review::all();
}
}
