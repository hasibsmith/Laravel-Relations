<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User_2 extends Model
{
     use Notifiable;
     protected $fillable = [

        'name', 'email',

    ];

 

    /**

     * The attributes that should be hidden for arrays.

     *

     * @var array

     */


    public function roles()

    {

        return $this->belongsToMany(Role::class, 'role_user');

    }

}

