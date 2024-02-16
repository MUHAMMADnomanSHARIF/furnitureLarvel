<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class setting extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'application_name',
        'email',
        'short_description',
        'color_one' ,
        'color_two' ,
        'color_three' ,
        'color_four' ,
        'facebook_link',
        'instagram_link',
        'gsc',
        'site_index',
    ];
}
