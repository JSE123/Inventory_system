<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
        'client_id'
    ];

    // una venta tiene un detalle de venta
    public function saleDetail(){
        return $this->hasMany(SaleDetail::class);
    }

    // una venta pertenece a un usuario
    public function client(){

        return $this->belongsTo(Client::class);
    }
}
