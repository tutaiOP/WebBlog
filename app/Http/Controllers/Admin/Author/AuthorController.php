<?php

namespace App\Http\Controllers\Admin\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Author\AuthorService;
use App\Models\Author;

class AuthorController extends Controller
{
    protected $authorService;

    public function __construct(AuthorService $authorService) {
        $this->authorService = $authorService;
    }


    public function index()
    {
        return view('admin.author.list', [
            'title' => 'Danh sách tác giả',
            'authors' => $this->authorService->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.author.add', [
            'title' => 'Thêm tác giả',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'name' => 'required|max:255',   
             'email' => 'required',     
        ]); 
       $this->authorService->insert($request);
       return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        return view('admin.author.edit',[
            'title' => 'Chỉnh sửa tác giả',
            'author' => $author,
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
    public function update(Request $request,Author $author)
    {   
        $validated = $request->validate([
            'name' => 'required|max:255',   
             'email' => 'required',     
        ]); 

        $result = $this->authorService->update($request,$author);
        if($result) {
             return redirect('/admin/author/list');
        }
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->authorService->destroy($request);
        if($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công',
            ]);
        }
            return response()->json(['error' => true]);
    }
}
