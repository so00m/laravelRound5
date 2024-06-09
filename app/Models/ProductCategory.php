<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Product;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable=['category_id','product_id'];


    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // }
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
    
}
