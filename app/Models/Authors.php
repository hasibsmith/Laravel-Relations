<?php

namespace App\Models;
use App\Models\Books;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    public function books(){
        return $this->hasMany(Books::class);
    }

    public function firstAddress()
    {
        return $this->hasOne(Books::class)->latest();  // Use 'latest' if you want the most recent address
    }
}
