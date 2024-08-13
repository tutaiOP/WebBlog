<?php 
namespace App\Http\Services\Users;
use Illuminate\Support\Str;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;
class RegisterService  {
    public function create($request) {
        try {
            Staff::create([
               'name' => $request->input('name'),
               'mobile' => $request->input('mobile'),
               'username' => $request->input('username'),
               'email' => $request->input('email'),
               'password' => Hash::make($request->input('password')),         
               'is_active' => '1',  
            ]);
         
            $request->session()->flash('success', 'Tạo tài khoản thành công');
            return true;
        } catch(\Exception $err) {
            $request->session()->flash('error', 'Đã có lỗi xảy ra khi tạo tài khoản.');
            \Log::error($err->getMessage());
            return false;
        }
    }
}