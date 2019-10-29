<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function getLogin()
    {
        if (Auth::check()) {
            return redirect('home');
        }
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $validate = Validator::make($request->all(),
            [
                'mssv'     => 'required',
                'password' => 'required'
            ],
            [
                'mssv.required' => 'Vui lòng nhập tài khoản',
                'password.required' => 'Vui lòng nhập mật khẩu'
            ]
        );
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }
        if (Auth::attempt(['mssv' => $request->mssv, 'password' => $request->password])) {
            $student = new Student();

            $student = $student::where('mssv', $request->mssv)->first();
            if (!$student) {
                Auth::logout();
                return redirect('login')->with('res', 'Tài khoản hoặc mật khẩu không đúng');
            } else {
                $request->session()->put('user', $student);

                return redirect('home');
            }

        } else {
            return redirect('login')->with('res', 'Tài khoản hoặc mật khẩu không đúng');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('user');
        return redirect('login');
    }
}
