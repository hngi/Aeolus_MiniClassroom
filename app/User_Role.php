<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Role extends Model
{
    protected $table = 'user__roles';

    protected $fillable = [
        'user_id',
        'role_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function role()
    {
        return $this->belongsTo('App\Roles');
    }
}
