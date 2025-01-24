<?php

namespace App\Models;
use App\Models\Authors;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function authors(){
        return $this->belongsTo(Authors::class);
    }
}
