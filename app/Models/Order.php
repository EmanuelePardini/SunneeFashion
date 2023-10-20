<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Order extends Model
{
    //use HasFactory;
    protected $table = 'orders'; 

    protected $fillable = [
        'sale_date', 
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('quantity'); 
    }
}