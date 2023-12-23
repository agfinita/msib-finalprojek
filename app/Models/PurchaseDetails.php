<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_id' ,
        'product_id' ,
        'quantity' ,
        'amount_total' ,
    ];

    public function purchase() {
        return $this->belongsTo(Purchase::class);
    }

    public function products() {
        return $this->belongsTo(Products::class);
    }
}
