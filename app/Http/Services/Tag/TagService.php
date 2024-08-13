<?php 
namespace App\Http\Services\Tag;
use Illuminate\Support\Str;
use App\Models\Tag;
use Illuminate\Support\Facades\Hash;

class TagService  {

    public function get() {
        return Tag::orderBy('id')->paginate(10);
    }

    public function insert($request) {
        try {
            Tag::create([
                'name' => $request->input('name'),
            ]);
            $request->session()->flash('success','Thêm thẻ thành công');
            return true;
        } catch (\Exception $err) {
            $request->session()->flash('error','Thêm thẻ thất bại');
            \Log::error($err->getMessage());
            return false;
        }
    }
    
    public function update($request,$tag) {
        try {
            $tag->fill($request->input());
            $tag->save();
            $request->session()->flash('success','Chỉnh sửa tag thành công');
            return true;
        } catch (\Exception $err) {
            $request->session()->flash('error','Chỉnh sửa tag thất bại');
            \Log::error($err->getMessage());
            return false;
        }
    }

    public function destroy($request) {
       
            $tag = Tag::where('id',$request->input('id'))->first();
            if($tag) {
                $tag->delete();
                return true;
            }       
            return false;
    }

}