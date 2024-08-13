<?php 
namespace App\Http\Services\Category;
use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class CategoryService  {

    public function get() {
        return Category::orderBy('id')->paginate(10);
    }

    public function insert($request) {
        try {
            Category::create([
                'name' => $request->input('name'),
            ]);
            $request->session()->flash('success',"Thêm thể loại thành công");
            return true;
        } catch (\Exception $err) {
            $request->session()->flash('error',"Thêm thể loại thất bại");
            \Log::error($err->getMessage());
            return false;
        }
    }
    
    public function update($request,$category) {
        try {
            $category->fill($request->input());
            $category->save();
            $request->session()->flash('success',"Chỉnh sửa thể loại thành công");
            return true;
        } catch (\Throwable $th) {
            $request->session()->flash('error',"Chỉnh sửa thể loại thất bại");
            \Log::error($err->getMessage());
            return false;
        }
    }

    public function destroy($request) {
        $category = Category::where('id',$request->input('id'))->first();
        if($category) {
            $category->delete();
            return true;
        }
            return false;
    }

    public function getId($id) {
        return Category::where('id', $id)->firstOrFail();
    }

    public function getPost($menu) {
        return $menu->posts()->orderByDesc('id')->paginate(12);
    }

}