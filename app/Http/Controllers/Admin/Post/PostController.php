<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\Post\PostService;
use App\Models\Post;
use App\Http\Requests\Post\PostRequest;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService) {
        $this->postService = $postService;
    }

    public function index()
    {

        return view('admin.post.list', [
            'title' => 'Danh sách bài viết',
            'posts' => $this->postService->get(),
           
        ]);
    }

  
    public function create()
    {
        return view('admin.post.add', [
            'title' => 'Thêm bài viết',
            'authors' => $this->postService->getAuthor(),
            'categories' => $this->postService->getCategories(),
            'tags' => $this->postService->getTags(),
        ]);
    }

 
    public function store(PostRequest $request)
    {
        
        $this->postService->insert($request);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.post.edit',[
            'title' => 'Chỉnh sửa bài viết',
            'post' => $post,
            'authors' => $this->postService->getAuthor(),
            'categories' => $this->postService->getCategories(),
            'tags' => $this->postService->getTags(),
            'postCategoryIds' => $post->categories->pluck('id')->toArray(), // Chuyển danh mục của bài viết thành mảng ID
            'postTagIds' => $post->tags->pluck('id')->toArray(),
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
    public function update(PostRequest $request,Post $post)
    {
        $result = $this->postService->update($request,$post);
        if($result) {
             return redirect('/admin/post/list');
        }
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $result = $this->postService->destroy($request);
        if($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công',
            ]);
        }
            return response()->json(['error' => true]);
    }
}
