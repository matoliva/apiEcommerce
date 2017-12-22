<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    CONST PRODUCTO_DISPONIBLE = 'disponible';
    CONST PRODUCTO_NO_DISPONIBLE = 'no disponible';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id'
    ];

    public function estaDisponible()
    {
        return $this->status == Product::PRODUCTO_DISPONIBLE;
    }

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
