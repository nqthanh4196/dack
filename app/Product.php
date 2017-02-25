<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'sanpham';
    public $timestamps = false;

    public function classify()
    {
    	return $this->belongsTo('App\Classify','idloai','id');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier','idnsx','id');
    }

    public function comment()
    {
    	return $this->hasMany('App\Comment','idsanpham','id');
    }

}
