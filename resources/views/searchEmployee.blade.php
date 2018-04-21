@extends("layouts.master")

@section("content")

<div class="subPost">
  <form action="/addEmp" method="post">
 {{ csrf_field() }}
 
      <div class="form-group">
        <label for="disabledTextInput">First Name</label>
        <input type="text"  class="form-control" value="{{$data->fName }}" name="fname">
      </div>

      <div class="form-group">
        <label for="disabledTextInput">Last Name</label>
        <input type="text"  class="form-control" value="{{$data->lName }}" name="lname">
      </div>

      <div class="form-group">
        <label for="disabledTextInput">Job</label>
        <input type="text"  class="form-control" value="{{$data->job }}" name="job">
      </div>




@endsection