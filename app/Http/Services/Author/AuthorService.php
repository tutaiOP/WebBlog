<?php 
namespace App\Http\Services\Author;
use Illuminate\Support\Str;
use App\Models\Author;
use Illuminate\Support\Facades\Hash;

class AuthorService  {

    public function get() {
        return Author::orderBy('id')->paginate(10);
    }

    public function insert($request) {
        try {
            Author::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
            ]);
            $request->session()->flash('success','Thêm tác giả thành công');
            return true;
        } catch (\Exception $err) {
            $request->session()->flash('success','Thêm tác giả thất bại');
            \Log::error($err->getMessage());
            return false;
        }
    }

    public function update($request,$author) {
        try {
            $author->fill($request->input());
            $author->save();
            $request->session()->flash('success','Chỉnh sửa tác giả thành công');
            return true;
        } catch (\Exception $err) {
            $request->session()->flash('success','Chỉnh sửa tác giả thất bại');
            \Log::error($err->getMessage());
            return false;
        }
    }

    public function destroy($request) {
        $author = Author::where('id',$request->input('id'))->first();
        if($author) {
            $author->delete();
            return true;
        }
            return false;
    }
}