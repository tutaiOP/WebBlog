<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Post\PostService;

class MainController extends Controller
{   
    protected $post;

    public function __construct(PostService $post) {
        $this->post = $post;
    }

    public function index() {
        return view('main',[
           'title' => 'Callie', 
           'posts' => $this->post->show(),
           'recentPosts' => $this->post->showRecentPost(),
           'postLifeStyle' => $this->post->showLifeStyle(),
           'postFashion' => $this->post->showFashion(),
           'postHealthy' => $this->post->showHealthy(),
           'postFashionAndTravel' => $this->post->showFashionAndTravel(),
           'postTechAndHealthy' => $this->post->showTechAndHealthy(),
        ]);
    }
}
