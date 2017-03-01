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
        $data = DB::select('select * from loaisanpham');

        return view('shop', ['data' => $data]);
    }

    public function getSanPham()
    {
        $data = DB::select('select * from sanpham');

        return view('shop',['sanpham'=> $data]);
    }
}