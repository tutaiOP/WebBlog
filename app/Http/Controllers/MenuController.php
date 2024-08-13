<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Category\CategoryService;

class MenuController extends Controller
{   
    protected $menuService;
    public function __construct(CategoryService $menuService) {
        $this->menuService = $menuService;
    }

    public function index(Request $request, $id , $name ='') {
        $menu = $this->menuService->getId($id);
        $posts = $this->menuService->getPost($menu);
        return view('category', [
            'title' => $menu->name,
            'posts' => $posts,
            'menu' => $menu,
        ]);
    }
}
