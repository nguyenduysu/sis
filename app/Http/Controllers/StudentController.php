<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class StudentController extends Controller
{
    public function getLogin()
    {
    	return view('login');
    }
    public function postLogin(Request $request)
    {
    	$validate = Validator::make($request->all(),
    		[
    			'username' => 'required',
    			'password' => 'required'
    		],
    		[
    			'username.required' => 'Bạn phải nhập tên tài khoản',
    			'password.required' => 'Bạn phải nhập mật khẩu'
    		]
    	);
    	if($validate->fails()) {
    		return redirect()->back()->withErrors($validate->errors());
    	}

    	$accountInfo = $request->only('username','password');

    	// dd($accountInfo);

    	if(Auth::attempt($accountInfo)) {
    		echo "thanh cong";
    		// return view('home');
    	} else {
    		echo "thất bại";
    		// return redirect()->route('getLogin');
    	}

    	// print_r($accountInfo);
    }
}
