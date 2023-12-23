<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name' ,
        'is_active' ,
    ];

    public function products() {
        return $this->hasMany(Products::class);
    }
}
