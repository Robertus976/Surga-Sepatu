<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi melalui mass assignment
    protected $fillable = [
        'name',
        'rec_address',
        'phone',
        'user_id',
        'product_id',
        'midtrans_order_id',
        'status',
        'payment_status',
        'snap_token',
    ];

    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }

    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
}
