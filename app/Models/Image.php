<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',   // Allow mass assignment for product_id
        'image_path',   // Allow mass assignment for image_path
        'alt_text',     // Allow mass assignment for alt_text
    ];
    // Define the inverse relationship with the product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
