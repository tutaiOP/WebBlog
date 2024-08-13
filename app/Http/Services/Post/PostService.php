<?php 
namespace App\Http\Services\Post;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Author;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Hash;

class PostService  {

    public function get()
    {
        return Post::with('categories', 'tags')->orderBy('id')->paginate(10);
    }

    public function show() {
        return Post::with('categories', 'tags')->orderByDesc('id')->get();
    }

    public function showRecentPost() {
        return Post::with('categories', 'tags')->latest()->take(4)->get();
    }


    public function showLifeStyle() {
        return Post::with('categories', 'tags')  // Tải mối quan hệ categories và tags
               ->whereHas('categories', function($query) {
                   $query->where('categories.id', 1);  // Điều kiện để lọc các categories có id = 1
               })
               ->orderByDesc('id')
               ->take(3)  // Sắp xếp theo id giảm dần
               ->get();
    }

    public function showFashion() {
        return Post::with('categories', 'tags')  // Tải mối quan hệ categories và tags
               ->whereHas('categories', function($query) {
                   $query->where('categories.id', 2);  // Điều kiện để lọc các categories có id = 1
               })
               ->orderByDesc('id')
               ->take(4)  // Sắp xếp theo id giảm dần
               ->get();
    }

    public function showHealthy() {
        return Post::with('categories', 'tags')  // Tải mối quan hệ categories và tags
               ->whereHas('categories', function($query) {
                   $query->where('categories.id', 5);  // Điều kiện để lọc các categories có id = 1
               })
               ->orderByDesc('id')
               ->take(4)  // Sắp xếp theo id giảm dần
               ->get();
    }

    public function showFashionAndTravel() {
        return Post::with('categories', 'tags')  // Tải mối quan hệ categories và tags
               ->whereHas('categories', function($query) {
                   $query->where('categories.id', [2, 4]);  // Điều kiện để lọc các categories có id = 2 & 4
               })
               ->orderByDesc('id')
               ->take(3)  // Sắp xếp theo id giảm dần
               ->get();
    }

    public function showTechAndHealthy() {
        return Post::with('categories', 'tags')  // Tải mối quan hệ categories và tags
               ->whereHas('categories', function($query) {
                   $query->where('categories.id', [3, 5]);  // Điều kiện để lọc các categories có id = 2 & 4
               })
               ->orderByDesc('id')
               ->take(3)  // Sắp xếp theo id giảm dần
               ->get();
    }

    public function getAuthor() {
        return Author::all();
    }

    public function getCategories() {
        return Category::all();
    }

    public function getTags() {
        return Tag::all();
    }

    public function insert($request)
    {
        try {
            // Create the post
            $post = Post::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'content' => $request->input('content'),
                'thumb' => $request->input('thumb'),
                'author_id' => $request->input('author_id'),
            ]);

            // Attach categories
            if ($request->has('categories')) {
                $post->categories()->sync($request->input('categories'));
            }

            // Attach tags
            if ($request->has('tags')) {
                $post->tags()->sync($request->input('tags'));
            }

            // Flash success message
            $request->session()->flash('success', 'Thêm bài viết thành công');
            return true;
        } catch (\Exception $err) {
            // Flash error message
            $request->session()->flash('error', 'Thêm bài viết thất bại');
            \Log::error($err->getMessage());
            return false;
        }
    }
    
    public function update($request, $post) {
        try {
            $post->fill($request->except('categories', 'tags')); // Cập nhật các thuộc tính bài viết, bỏ qua các mảng categories và tags
            $post->save();
            // Cập nhật các thể loại
            if ($request->has('categories')) {
                $post->categories()->sync($request->input('categories')); // Đồng bộ các thể loại
            } else {
                $post->categories()->sync([]); // Xóa tất cả thể loại nếu không có thể loại mới
            }

            // Cập nhật các thẻ
            if ($request->has('tags')) {
                $post->tags()->sync($request->input('tags')); // Đồng bộ các thẻ
            } else {
                $post->tags()->sync([]); // Xóa tất cả thẻ nếu không có thẻ mới
            }
           
            $request->session()->flash('success','Chỉnh sửa bài viết thành công');
        } catch (\Exception $err) {
            $request->session()->flash('error', 'Chỉnh sửa bài viết thất bại');
            \Log::error($err->getMessage());
            return false;
        }
          return true;
    }

    public function destroy($request) {
        try {
            $post = Post::where('id',$request->input('id'))->first();
            if($post) {
                $post->delete();
                return true;
            }
        } catch (\Exception $err) {
            \Log::error($err->getMessage());
            return false;
        }
    }

    public function showBlogPost($id) {
        return Post::where('id',$id)->with('categories','tags')->firstOrFail();
    }

}