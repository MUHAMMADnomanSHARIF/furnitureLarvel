<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;

class transection extends Model
{
    use HasFactory, InteractsWithMedia, SoftDeletes;

    protected $fillable = [
        'order_id',
        'stripe_customer_id',
        'email',
        'amount',
        'status',


    ];

    public function order()
    {
        return $this->belongsTo(order::class);
    }
}
