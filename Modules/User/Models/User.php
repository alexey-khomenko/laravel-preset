<?php

namespace Modules\User\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\User\Database\factories\UserFactory;

// todo SoftDeletes - надо или нет?
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable  // extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login',
        'name',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];

    // todo - фабрика
    /**
     * @return UserFactory
     */
    protected static function newFactory(): UserFactory
    {
        return UserFactory::new();
    }
}
