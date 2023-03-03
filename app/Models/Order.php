<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
      'order_id',
      'user_id',
      'shop_id',
      'total_amount',
      'discount',
      'note',
    ];
}
