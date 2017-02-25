<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classify extends Model
{
    protected $table='loaisanpham';
    public $timestamps = false;

    public function categories()
    {
    	return $this->belongsTo('App\Categories','id_danhmucsp','id');
    }

    public function product()
    {
    	return $this->hasMany('App\Product','idloai','id');
    }
}
