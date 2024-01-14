<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'image', 'price', 'description'];
    protected $primaryKey = 'product_id';
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
