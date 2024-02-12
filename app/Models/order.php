<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;

class order extends Model
{
    use HasFactory, InteractsWithMedia, SoftDeletes;

    protected $fillable = [
        'order_no',
        'product_detail',
        'totalprice',
        'userid',
        'Address',
        'delivery_status',
        'payment_method',
        'payment_status',
        'update_payment_status'

    ];



    protected static function booted()
    {
        static::creating(function ($order) {
            // Check if any orders exist
            $count = Order::count();

            // If it's the first order, generate a random three-digit number
            if ($count == 0) {
                $randomNumber = str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);
            } else {
                // Get the last order number
                $lastOrder = Order::latest()->first();

                // Increment the last order number for subsequent orders
                $nextOrderNumber = $lastOrder ? intval(substr($lastOrder->order_no, 5)) + 1 : 1;

                // Pad the order number with zeros
                $randomNumber = str_pad($nextOrderNumber, 3, '0', STR_PAD_LEFT);
            }

            // Use the current month
            $currentMonth = now()->format('m');

            // Concatenate the month and the random or sequential three-digit number
            $order->order_no = "FM-$currentMonth$randomNumber";
        });
    }



    // Define the relationship with transactions
    public function transactions()
    {
        return $this->hasMany(transection::class);
    }
}
