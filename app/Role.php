<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = [
        'role_name',
        'role_desc'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    
}
