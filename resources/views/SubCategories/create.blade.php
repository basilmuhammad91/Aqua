@extends('master_dashboard')
@section('body')

<form method="post" action="{{action('ProductSubCategoryController@submit')}}" enctype="multipart/form-data" class="pl-5">

    <h4>Add Sub Category</h4><br>
  @csrf
  
  Sub Category Name: <input type="text" name="Name" class="form-control"><br>
  Select Category: <br>
  <select name="CategoryId" class="form-control">
  	<option>Select</option>
  	@foreach($cat as $c)
  		<option value="{{$c->CategoryId}}">{{$c->Name}}</option>
  	@endforeach
  </select><br>
  <input type="submit" class="btn btn-secondary" value="Submit">
</form>

@stop