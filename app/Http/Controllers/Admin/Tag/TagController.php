<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Tag\TagService;
use App\Models\Tag;

class TagController extends Controller
{
    protected $tagService;

    public function __construct(TagService $tagService) {
        $this->tagService = $tagService;
    }


    public function index()
    {
        return view('admin.tag.list', [
            'title' => 'Danh sách các thẻ',
            'tags' => $this->tagService->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tag.add',[
            'title' => 'Thêm tag',
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
        $this->tagService->insert($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return view('admin.tag.edit',[
            'title' => 'Chỉnh sửa thẻ',
            'tag' => $tag,
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
    public function update(Request $request, Tag $tag)
    {   
        $validated = $request->validate([
            'name' => 'required|max:255',        
        ]); 
        $result = $this->tagService->update($request,$tag);
        if($result) {
             return redirect('/admin/tag/list');
        }
             return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->tagService->destroy($request);
        if($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công',
            ]);
            return response()->json(['error' => true]);
        }
    }
}
