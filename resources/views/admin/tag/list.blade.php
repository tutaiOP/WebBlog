@extends('admin.main')

@section('content')
<table class="table table-striped table-hover" >
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col" >&nbsp;</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tags as $tag)  
      <tr>
        <th scope="row">{{ $tag->id }}</th>
        <td>{{ $tag->name }}</td>
        <td>&nbsp;</td>
        <td>
            <a class="btn btn-primary btn-sm " href="/admin/tag/edit/{{$tag->id}}">
          <i class="fas fa-edit "></i>
            </a>
            <a class="btn btn-danger btn-sm"  onclick="removeRow({{$tag->id}}, '/admin/tag/destroy')">
              <i class="fas fa-trash"></i>
          </a>
        </td>

      </tr>
      @endforeach
    </tbody>
   
  </table>
  {{ $tags->links() }}

@endsection
