<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        
        // Kiểm tra nếu $user là null, có thể chuyển hướng hoặc thông báo lỗi
        if (!$user) {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để tiếp tục.');
        }

        return view('account.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:15',
            'birthdate' => 'nullable|date',
            'gender' => 'nullable|in:male,female',
        ]);

        $user->update($request->only('name', 'email', 'phone', 'birthdate', 'gender'));

        return redirect()->route('account.edit')->with('success', 'Thông tin đã được cập nhật.');
    }

    public function deactivate()
    {
        $user = Auth::user();
        $user->active = false; // Assuming you have an 'active' field in users table
        $user->save();

        Auth::logout();

        return redirect('/')->with('success', 'Tài khoản đã bị vô hiệu hóa.');
    }
}
