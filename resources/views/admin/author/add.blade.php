@extends('admin.main')

@section('content')
<form action="" novalidate="novalidate" method="POST">
    <div class="card-body">
      <div class="form-group">
        <label for="name">Tên tác giả</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter name">
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    @csrf
  </form>
@endsection