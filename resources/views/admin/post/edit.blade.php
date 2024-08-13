@extends('admin.main')

@section('content')
<form action="" novalidate="novalidate" method="POST">
    <div class="card-body">
      <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="menu">Tiêu đề </label>
                <input type="text" name="title" value="{{$post->title}}" class="form-control"  placeholder="Nhập tiêu đề ">
              </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label >Tác giả</label>
                <select class="form-control" name="author_id">
                  @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ $post->author_id == $author->id ? "selected" : ""  }} >{{ $author->name }}</option>
                  @endforeach            
                </select>  
              </div>
        </div>
       
        <div class="col-6">
          <div class="form-group">
            <label>Thể loại</label>
            <div class="form-check">
              @foreach ($categories as $category)
              <div class="form-check">
                <input class="form-check-input" name="categories[]" type="checkbox"
                  {{ in_array($category->id, $postCategoryIds) ? 'checked' : '' }}
                  value="{{ $category->id }}" id="{{ $category->id }}">
                <label class="form-check-label" for="{{ $category->id }}">
                  {{ $category->name }}
                </label>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        

        <div class="col-6">
          <div class="form-group">
            <label>Thẻ</label>
            <div class="form-check">
              @foreach ($tags as $tag)
              <div class="form-check">
                <input class="form-check-input" name="tags[]" type="checkbox"
                {{ in_array($tag->id,$postTagIds) ? "checked" : "" }}
                value="{{ $tag->id }}" id="{{ $tag->id }}">
                <label class="form-check-label" for="{{ $tag->id }}">
                  {{ $tag->name }}
                </label>
              </div>
              @endforeach
            </div>
          </div>
        </div>
    </div>
  
      <div class="form-group">
        <label >Mô tả </label>
        <textarea name="description" class="form-control">{{ $post->description }}</textarea>
      </div>

      <div class="form-group">
        <label >Mô tả chi tiết</label>
        <textarea name="content" id="content" class="form-control">{{ $post->content }}</textarea>
      </div>

      <div class="form-group">
        <label for="menu">Ảnh Sản Phẩm</label>
        <input type="file"  class="form-control" id="upload">
        <div id="image_show">
          <a href="{{$post->thumb}}">
            <img src="{{$post->thumb}}" alt="" width="100px">
          </a>
        </div>
        <input type="hidden" name="thumb"  id="file">
    </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    @csrf
  </form>
@endsection