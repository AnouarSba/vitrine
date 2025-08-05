<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Product extends Model
{
    public function run()
    {
        Product::create([
            'name' => 'Leather Bag',
            'description' => 'Premium quality leather bag.',
            'price' => 59.99,
            'category_id' => 2,
            'image' => 'bag.jpg',
        ]);
    }
}
