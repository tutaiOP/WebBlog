<?php 
namespace App\Http\Services\Staff;
use Illuminate\Support\Str;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class StaffService  {



    public function getStaff() {
        return Staff::orderByDesc('id')->paginate(10);
    }

    public function insert($request) {
        try {
            Staff::create([
               'name' => $request->input('name'),
               'mobile' => $request->input('mobile'),
               'username' => $request->input('username'),
               'email' => $request->input('email'),
               'password' => Hash::make($request->input('password')),     
               'is_active' => $request->input('active'),      
            ]);
         
            $request->session()->flash('success', 'Tạo tài khoản thành công');
            return true;
        } catch(\Exception $err) {
            $request->session()->flash('error', 'Đã có lỗi xảy ra khi tạo tài khoản.');
            \Log::error($err->getMessage());
            return false;
        }
    }

    public function update($request,$staff) {
        try {
            $data = $request->input();
            if ($request->has('password')) {
                $data['password'] = Hash::make($request->input('password'));
            }
            $staff->fill($data);
            $staff->save();        
            $request->session()->flash('success','Chỉnh sửa thành công');
            return true;
        }catch(\Exception $err) {
            $request->session()->flash('error', 'Đã có lỗi xảy ra khi sửa tài khoản.');
            \Log::error($err->getMessage());
            return false;
        }
    }
    
    public function delete($request) {
        $staff = Staff::where('id',$request->input('id'))->first();
        if($staff) {
            $staff->delete();
            return true;
        }
            return false;
    }

}