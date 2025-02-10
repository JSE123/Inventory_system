<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    protected $fillable = [
        'quantity',
        'unit_price',
        'sub_total',
        'sale_id',
        'product_id'
    ];
    
    // un detalle de venta pertenece a una venta
    public function sale(){
        return $this->belongsTo(Sale::class);
    }
    
    // un detalle de venta tiene productos a una venta
    public function product(){
        return $this->belongsTo(Product::class);
    }

}
