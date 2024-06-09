<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['productName','price','discription','image',];
    
  
    public function categories()
        {
            return $this->belongsToMany(Category::class, 'product_categories');
        }

}
