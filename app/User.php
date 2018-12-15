<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'email'
    ];

    public function phone()
    {
        return $this->hasOne('App\Phone', 'user_id');
    }

    public function product()
  	{
  		return $this->hasMany('App\Product', 'user_id', 'id');
  	}
}
