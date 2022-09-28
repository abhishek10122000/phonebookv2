<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Hash;

class Admin extends Authenticatable
{
    use HasFactory;
    public function setPasswordAttribute($value){
        return $this->attributes['password']=Hash::make($value);
    }
}
