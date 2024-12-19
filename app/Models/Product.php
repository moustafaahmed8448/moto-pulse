<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify only the columns directly related to the product
    protected $fillable = ['name', 'description', 'price'];

    // Define the relationship with images (one-to-many)
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
