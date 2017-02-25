<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table='danhmucsanpham';
    public $timestamps = false;

    public function classify()
    {
    	return $this->hasMany('App\Classify','id_danhmucsp','id');
    }

    public function product()
    {
    	return $this->hasManyThrough('App\Product','App\Classify','id_danhmucsp','idloai');
    }
}
