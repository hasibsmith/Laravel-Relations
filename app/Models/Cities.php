<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    public function addresses(){
        return $this->hasMany(Addresses::class);
    }
  
}
