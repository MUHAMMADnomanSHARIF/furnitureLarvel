<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class productSize extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, SoftDeletes;
    protected $fillable = [
        'name',
        'parent_category_id',
        'child_category_id',
        'dimension'
        ];
        public function childCategory()
        {
            return $this->belongsTo(ChildCategory::class,'child_category_id');
        }
        public function parentCategory()
        {
            return $this->belongsTo(ParentCategory::class, 'parent_category_id');
        }

        public function products()
        {
            return $this->hasMany(Product::class);
        }
}
