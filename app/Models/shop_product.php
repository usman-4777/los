<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shop_product extends Model
{
    use HasFactory;
    protected $fillable = [
      'product_id',
      'shop_id',

    ];
}
