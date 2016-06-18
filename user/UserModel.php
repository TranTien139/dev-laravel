<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = ['email', 'password','fullname','birthday','gender','level','avatar'];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public $timestamps=  true;

}
