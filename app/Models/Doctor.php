<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    use HasFactory;

    // Define the attributes that can be mass-assigned
    protected $fillable = [
        'doctor_name',
       
    ];

    public function patient(){
        return $this->belongsToMany(Patient::class);
    }
}
