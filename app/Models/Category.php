<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Category extends Model
{
    public function run()
    {
        Category::create(['name' => 'Shoes']);
        Category::create(['name' => 'Bags']);
        Category::create(['name' => 'Accessories']);
    }
}
