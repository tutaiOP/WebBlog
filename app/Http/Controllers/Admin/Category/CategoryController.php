<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Category\CategoryService;
use App\Models\Category;

class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryService $categoryService) {
        $this->categoryService = $categoryService;
    }


    public function index()
    {
        return view('admin.category.list',[
            'title' => 'Danh sách thể loại',
            'categories' => $this->categoryService->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add',[
            'title' => 'Thêm thể loại',
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',        
        ]); 
    
        $this->categoryService->insert($request);
            return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('admin.category.edit', [
            'title' => "Chỉnh sửa thể loại",
            'category' => $category,
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
    public function update(Request $request, Category $category)
    {   
        $validated = $request->validate([
            'name' => 'required|max:255',        
        ]); 
        $result = $this->categoryService->update($request,$category);
        if($result) {
             return redirect('/admin/category/list');
        } 
             return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->categoryService->destroy($request);
        if($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xoá thành công'
            ]);
        }
            return response()->json(['error' => true]);
    }
}
