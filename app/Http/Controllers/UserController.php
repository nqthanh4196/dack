<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function getDanhMucSanPham()
    {
        $loaisanpham = DB::select('select * from loaisanpham');
        $sanpham = DB::select('select * from sanpham');
        return view('shop')->with(['loaisanpham' => $loaisanpham,'loaisanpham'=>$sanpham]);
    }

    public function getSanPham()
    {
        $sanpham = DB::select('select * from sanpham');
       return view('index', ['sanpham' => $sanpham]);
    }
}