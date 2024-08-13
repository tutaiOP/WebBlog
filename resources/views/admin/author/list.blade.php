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
        @foreach ($authors as $author)  
      <tr>
        <th scope="row">{{ $author->id }}</th>
        <td>{{ $author->name }}</td>
        <td>{{ $author->email }}</td>
        <td>&nbsp;</td>
        <td>
            <a class="btn btn-primary btn-sm " href="/admin/author/edit/{{$author->id}}">
          <i class="fas fa-edit "></i>
            </a>
            <a class="btn btn-danger btn-sm"  onclick="removeRow({{$author->id}}, '/admin/author/destroy')">
              <i class="fas fa-trash"></i>
          </a>
        </td>

      </tr>
      @endforeach
    </tbody>
   
  </table>
  {{ $authors->links() }}

@endsection
