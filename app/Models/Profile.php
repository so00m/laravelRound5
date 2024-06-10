<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin;

class Profile extends Model
{
    use HasFactory;
    protected $fillable=['admin_id','userName','phone','address','image',];

    public function admins()
    {
        return $this->belongTo(Profile::class);
    }
}
