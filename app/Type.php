<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = [
        'type'
    ];
    public function produits()
    {
        return $this->hasMany(produit::class);
    }
}
