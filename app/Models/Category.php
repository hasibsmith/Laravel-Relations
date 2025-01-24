<?php

namespace App\Models;

use App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function products()
    {

        return $this->hasMany(Products::class);
    }
}
