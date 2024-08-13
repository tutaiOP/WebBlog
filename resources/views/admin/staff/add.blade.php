@extends('admin.main')

@section('content')
<form action="" novalidate="novalidate" method="POST">
    <div class="card-body">
      <div class="form-group">
        <label for="name">Họ và tên</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label for="mobile">Mobile</label>
        <input type="number" name="mobile" class="form-control"  placeholder="Mobile">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control"  placeholder="Enter username">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" name="password" class="form-control"  placeholder="Enter password">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Re_Password</label>
        <input type="password" name="re_password" class="form-control"  placeholder="Enter Repassword">
      </div>
      
      <div class="form-group">
        <label for="active">Active</label>
        <div class="custom-control custom-radio">
          <input class="custom-control-input" type="radio" id="customRadio1" value="1" checked name="active">
          <label for="customRadio1" class="custom-control-label">Có </label>
        </div>  
        <div class="custom-control custom-radio">
          <input class="custom-control-input" type="radio" id="customRadio2" value="0" name="active">
          <label for="customRadio2" class="custom-control-label">Không</label>
        </div>  
      </div>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    @csrf
  </form>
@endsection