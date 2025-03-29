<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'new_price' , "old_price" , 'image' , 'sale' , 'quantity' , 'feature' , 'status' , 'availabale', 'rate' , 'category_id'];
}
