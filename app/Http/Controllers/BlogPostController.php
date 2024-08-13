<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Post;
use App\Http\Services\Post\PostService;

class BlogPostController extends Controller
{
    protected $blogpostService;

    public function __construct(PostService $blogpostService) {
        $this->blogpostService = $blogpostService;
    }

    public function index(Request $request, $id, $name ='') {
        $blogpost = $this->blogpostService->showBlogPost($id);

        return view('blogpost',[
            'title' => $blogpost->title,
            'blogpost' => $blogpost,
            
        ]);
    }
}
