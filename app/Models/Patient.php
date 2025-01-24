<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    use HasFactory;

    // Define the attributes that can be mass-assigned
    protected $fillable = [
        'patient_name',
        'prescription',
    ];
    public function doctor(){
        return $this->belongsToMany(Doctor::class);
    }
}
