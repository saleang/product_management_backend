<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = [
        'name',
        'barcode',
        'image',
        'import_price',
        'export_price',
        'category_id'
    ];

    protected $casts = [
        'import_price' => 'decimal:2',
        'export_price' => 'decimal:2',
    ];

    protected $appends = ['image_url'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/' . $this->image);
        }
        return null;
    }
}
