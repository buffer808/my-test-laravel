<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
<<<<<<< HEAD

class User extends Authenticatable
{
    use Notifiable;
=======
use Phoenix\EloquentMeta\MetaTrait;

class User extends Authenticatable
{
    use Notifiable, MetaTrait;
>>>>>>> bc733ef0e7dc3aa78114e49a43ff131012ca53bf

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
<<<<<<< HEAD
=======

    protected $meta_model = 'App\UserMeta';

>>>>>>> bc733ef0e7dc3aa78114e49a43ff131012ca53bf
}
