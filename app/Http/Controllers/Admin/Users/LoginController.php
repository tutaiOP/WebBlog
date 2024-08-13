<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('admin.users.login', [
            'title' => 'Đăng nhập'
        ]);
    }

    public function store(Request $request)
    {
        $validates = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('username', 'password');
        $remember = $request->filled('remember');

        if (Auth::guard('staff')->attempt($credentials, $remember)) {
             // Lưu id của staff vào session
            session(['id' => Auth::guard('staff')->id()]);
            return redirect()->route('admin');
        }

        $request->session()->flash('Error', 'Tên hoặc mật khẩu không hợp lệ');
        return redirect()->back();
    }

}
