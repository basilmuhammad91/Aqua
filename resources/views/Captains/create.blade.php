@extends('master_dashboard')
@section('body')

<form action="{{action('CaptainController@submit')}}" method="post" enctype="multipart/form-data">
<h4>Add Captains</h4><br>
	@csrf

    	
   Name: <br> <input type="text" name="Name" class="form-control"><br>
   Phone: <br> <input type="text" name="Phone" class="form-control"><br>
   UserName: <br> <input type="text" name="UserName" class="form-control"><br>
   Password: <br> <input type="text" name="Password" class="form-control"><br>
  Territory: <br> <select name="TerritoryId" class="form-control">
   	<option value="1">Malir</option>
   	<option value="2">Johar</option>
   </select>
   <br>
 CNIC: <br> <input type="text" name="CNIC" class="form-control"><br>
   Status: <br>  <select name="IsActive" class="form-control">
   	<option value="1">Yes</option>
   	<option value="0">No</option>
   </select><br>
   EmergencyContactNo: <br> <input type="text" name="EmergencyContactNo" class="form-control"><br>
   Image: <br>
<input type="file" name="Image" class="form-control"><br>
<input type="submit" name="" value="submit" class="btn btn-primary">
</form>

@stop