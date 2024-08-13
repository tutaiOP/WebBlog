@extends('admin.main')

@section('content')
<table class="table table-striped table-hover" >
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">mobile</th>
        <th scope="col">username</th>
        <th scope="col">password</th>
        <th scope="col">email</th>
        <th scope="col">Trạng thái</th>
        <th scope="col" style="width:100px">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($staffs as $staff)  
      <tr>
        <th scope="row">{{ $staff->id }}</th>
        <td>{{ $staff->name }}</td>
        <td>{{ $staff->mobile }}</td>
        <td>{{ $staff->username }}</td>
        <td>{{ $staff->password }}</td>
        <td>{{ $staff->email }}</td>
        <td>{!! \App\Helpers\Helper::active($staff->is_active) !!}</td>
        <td>&nbsp;</td>
        <td>
            <a class="btn btn-primary btn-sm " href="/admin/staff/edit/{{$staff->id}}">
         <i class="fas fa-edit "></i>
            </a>
        </td>
        <td>
        <a class="btn btn-danger btn-sm"  onclick="removeRow({{$staff->id}}, '/admin/staff/destroy')">
            <i class="fas fa-trash"></i>
        </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection