<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'product_id', 'customer', 'review', 'star',
    ];

    public function products()
    {
    return $this->belongsTo(Product::class);
    }
}
