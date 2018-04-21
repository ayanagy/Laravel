@extends("layouts.master")

@section("content")

<div class="subPost">
  <form action="/addEmp" method="post">
 {{ csrf_field() }}
      <div class="form-group">
        <label for="disabledTextInput">First Name</label>
        <input type="text"  class="form-control" name="fname">
      </div>

      <div class="form-group">
        <label for="disabledTextInput">Last Name</label>
        <input type="text"  class="form-control" name="lname">
      </div>

      <div class="form-group">
        <label for="disabledTextInput">Job</label>
        <input type="text"  class="form-control" name="job">
      </div>


      
 <div class="form-group">
 <label >Status</label>
 <input type="text" list="datalist" name="status">
<datalist id="datalist">
  <option>Active</option>
  <option >Not active</option>
  
</datalist>
</div>


<br>
      <div class="form-group">
          <label for="disabledSelect">choose image</label>
          <input type="file"  class="btn"  name="image">

        </div>




        <h1>Select a location!</h1>
        <p>Click on a location on the map to select it. Drag the marker to change location.</p>
        
        <!--map div-->
        <div id="map"></div>
        
        <!--our form-->
        <h2>Chosen Location</h2>
        
            <input type="text" id="lat" name="lat" readonly="yes"><br>
            <input type="text" id="lng" name="lng" readonly="yes">


     <br><br>
      <input type="submit" class="btn btn-primary" value="add">



       


  </form>

</div>

</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>














@endsection