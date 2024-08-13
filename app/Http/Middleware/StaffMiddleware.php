<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Staff;
use Closure;
class StaffMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        try {
            // Kiểm tra session xem có lưu trữ thông tin staff không
            if (session()->has('id')) {
                // Lấy thông tin staff từ session
                $staff = Staff::find(session('id'));

                // Kiểm tra xem staff có tồn tại và đang hoạt động không
                if ($staff && $staff->is_active) {
                    // Nếu có, tiếp tục yêu cầu
                    return $next($request);
                }
            }
            // Nếu không, chuyển hướng tới trang đăng nhập
            return redirect('/admin/users/login')->with('error', 'Bạn không có quyền truy cập.');
        } catch (\Throwable $err) {
            return redirect('/admin/users/login')->with('error', 'Có lỗi xảy ra.');
        }
    }
}
