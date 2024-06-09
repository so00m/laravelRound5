<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['categoryName','categoryDescription'];

    public function products()
        {
            return $this->belongsToMany(Product::class, 'product_categories');
        }
            
}
