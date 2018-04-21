@extends("layouts.master")
@section("content")

<div class="subPost">
  <form action="/admin" method="post">
 {{ csrf_field() }}
      <div class="form-group">
        <label for="disabledTextInput">User Name</label>
        <input type="text"  class="form-control" name="username">


      </div>
      <div class="form-group">
        <label for="disabledSelect">Passward</label>
        <input type="password"  class="form-control"  name="passward">

      </div>
      <div class="form-check">


      </div>
      <input type="submit" class="btn btn-primary" value="login">

  </form>
</div>

</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

@endsection
