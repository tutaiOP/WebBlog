<?php

namespace App\Http\Controllers\Admin\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Staff\StaffService;
use App\Http\Requests\Staff\StaffRequest;
use App\Models\Staff;

class StaffController extends Controller
{
    protected $staffService;

    public function __construct(StaffService $staffService) {
        $this->staffService = $staffService;
    }

    public function index()
    {
        return view('admin.staff.list', [
            'title' => 'Danh sách nhân viên',
            'staffs' => $this->staffService->getStaff(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.staff.add',[
            'title' => 'Thêm nhân viên',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StaffRequest $request)
    {
        $this->staffService->insert($request);
         return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
       
        return view('admin.staff.edit', [
            'title' => 'Chỉnh sửa nhân viên',
            'staff' => $staff,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StaffRequest $request,Staff $staff)
    {
       
        $result = $this->staffService->update($request,$staff);
        if($result) {
            return redirect('/admin/staff/list');
        }
            return redirect()->back();
    }

    /** 
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->staffService->delete($request);
        if($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa sản phẩm thành công',
            ]);
            return response()->json(['error' => true]);
        }
    }
}
