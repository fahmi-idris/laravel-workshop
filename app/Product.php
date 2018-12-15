<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
      'user_id', 'product_name', 'quantity'
  ];

  public function user()
	{
		return $this->belongsTo('App\User', 'id', 'user_id');
	}
}
