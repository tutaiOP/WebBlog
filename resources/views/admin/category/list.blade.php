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
        @foreach ($categories as $category)  
      <tr>
        <th scope="row">{{ $category->id }}</th>
        <td>{{ $category->name }}</td>
        <td>&nbsp;</td>
        <td>
            <a class="btn btn-primary btn-sm " href="/admin/category/edit/{{$category->id}}">
          <i class="fas fa-edit "></i>
            </a>
            <a class="btn btn-danger btn-sm"  onclick="removeRow({{$category->id}}, '/admin/category/destroy')">
              <i class="fas fa-trash"></i>
          </a>
        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
@endsection