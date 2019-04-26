<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'first_name',
    ];
    public function docent()
    {
        return $this->hasOne(Docent::class);
    }

    public function role()
    {
        return $this->hasOne(Role::class);
    }

    public function roleName()
    {
        return $this->role->role_name;
    }
}
