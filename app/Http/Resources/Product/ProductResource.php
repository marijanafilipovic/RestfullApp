<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'name' => $this->name,
            'description'=>$this->description,
          'price' => $this->price,
            'totalPrice' => round((1 - ($this->discount/100)) * $this->price, 2),

          'discount' => $this->discount == 0 ? 'This product does not have a discount' : $this->discount,
            'slug' => $this->slug,
            //'rating' => $this->star,
            //'rating' => $this->>reviews->sum('star')/$this->reviews->count(),
             'rating' => $this->reviews > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'No rating',
            'href' =>[
            'review' => route('reviews.index',$this->id)]
        ];
    }
}
