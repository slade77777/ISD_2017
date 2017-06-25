<?php
namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    protected $table = 'users';

    protected $fillable = [
        'id', 'name', 'password','email','remember_token','role'
    ];
}