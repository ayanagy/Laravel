@extends("layouts.master")
@section("content")
<h1> admin page </h1>

<Button style="color:blue;"><a href="/addEmployee"> Add </a></Button>

<br><br>
<form  action="/search" method="post">
<input type="text" placeholder="search by name" name="search">
<Button style="color:green;"><a href="/searchEmployee"> Search </a></Button> 
</form>

</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

@endsection
 