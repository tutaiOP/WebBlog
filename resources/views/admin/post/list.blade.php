@extends('admin.main')

@section('content')
<table class="table table-striped table-hover" >
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tiêu đề</th>
        <th scope="col">thumb</th>
        <th scope="col">description</th>
        <th scope="col">content</th>
        <th scope="col">Tác giả</th>
        <th scope="col">Thể loại</th>
        <th scope="col">Thẻ </th>
        <th scope="col" style="width:100px">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)  
      <tr>
        <th scope="row">{{ $post->id }}</th>
        <td>{{ $post->title }}</td>
        <td><a href="{{$post->thumb}}" target="_blank">
          <img src="{{$post->thumb}}" width="100px" alt="">
        </a></td>
        <td>{{ $post->description }}</td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->author->name }}</td>
        <td>
          @foreach ($post->categories as $category)
              {{ $category->name }}@if (!$loop->last), @endif
          @endforeach
        </td>
        <td>  
          @foreach ($post->tags as $tag)
              {{ $tag->name }}@if (!$loop->last), @endif
          @endforeach
        </td>
        <td>&nbsp;</td>
        <td>
            <a class="btn btn-primary btn-sm " href="/admin/post/edit/{{$post->id}}">
         <i class="fas fa-edit "></i>
            </a>
        </td>
        <td>
        <a class="btn btn-danger btn-sm"  onclick="removeRow({{$post->id}}, '/admin/post/destroy')">
            <i class="fas fa-trash"></i>
        </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {!! $posts->links() !!}
@endsection