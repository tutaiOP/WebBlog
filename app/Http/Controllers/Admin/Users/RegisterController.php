<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Users\RegisterRequest;
use App\Http\Services\Users\RegisterService;

class RegisterController extends Controller
{
    protected $registerService;

    public function __construct(RegisterService $registerService) {
        $this->registerService = $registerService;
    }

    public function index() {
        return view('admin.users.register', [
            'title' => 'Trang đăng ký'
        ]);
    }

    public function store(RegisterRequest $request) {
        $this->registerService->create($request);   
        return redirect()->route('login');
    }
}
