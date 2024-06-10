<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile; 

class Admin extends Model
{
    use HasFactory;
    protected $fillable=['email','password'];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    
}
