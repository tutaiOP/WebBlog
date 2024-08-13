<?php

namespace App\View\Composers;
use Illuminate\View\View;
use App\Models\Category;

class CategoryComposer {

    public function __construct() 
    {

    }
 
    /**
     * Bind data to the view.
     */
    public function compose(View $view)
    {
        $categories = Category::orderBy('id')->get();
        $view->with('categories', $categories);
    }
}