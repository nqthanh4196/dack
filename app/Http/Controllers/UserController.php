<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;


class UserController extends Controller
{

    public function change(Request $request)
        {
            $this->validate($request,
            [
                'current_password' => 'required',
                'password' => 'required|same:password',
                'password_confirmation' => 'required|same:password',
            ],
            [
                'current_password.required' => 'Nhập Mật Khẩu',
                'password.required' => 'Vui lòng nhập mật khẩu',
                'password_confirmation.required'=>'Vui lòng nhập lại mật khẩu',
                'password_confirmation.same'=>'Nhập lại mật khẩu không đúng'
            ]
            );
            $current_password = Auth::user()->password;           
            if(Hash::check($request->current_password, $current_password))
            {           
                $user_id = Auth::user()->id;                       
                $obj_user = User::find($user_id);
                $obj_user->password = Hash::make($request->password);
                $obj_user->save(); 
                return redirect('password/change')->with('thongbao','Thay đổi  thành công');
            }
            else
            {           
                return redirect('password/change')->with('loi','Mật khẩu hiện tại không đúng');   
            }
            return redirect('password/change');
        }

        public function myaccount(Request $request)
        {
            $this->validate($request,
            [
                'ten'=>'required',
            ],
            [
                'ten.required'=>'Vui lòng nhập tên....',
            ]
            );
            $user_id = Auth::user()->id;                       
            $obj_user = User::find($user_id);
            $obj_user->name = $request->ten;
            $obj_user->save();
            return redirect('myaccount')->with('thongbao','Cập nhập thông tin thành công');
        }
        
}