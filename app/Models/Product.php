<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'costo',
        'stock_min',
        'category_id'
    ];

    // Relación con la categoría
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function saleDetail(){
        return $this->hasMany(SaleDetail::class);
    }
}
