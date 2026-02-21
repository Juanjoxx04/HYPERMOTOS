<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ["nombre", "precio", "stock", "proveedor", "imagen_url"];

    public function shopping_cart()
    {
        return $this->hasMany(shoppingCart::class);
    }
}
