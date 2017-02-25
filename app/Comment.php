<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comment';
    public $timestamps = false;

    public function product()
    {
    	return $this->belongsTo('App\Product','idsanpham','id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User','iduser','id');
    }
}
