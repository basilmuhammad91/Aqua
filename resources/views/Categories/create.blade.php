@extends('master_dashboard')
@section('body')

<form method="post" action="{{action('ProductCategoryController@submit')}}" enctype="multipart/form-data" class="pl-5">

	  <h4>Add Category</h4><br>
  @csrf
  
  Category Name: <input type="text" name="Name" class="form-control"><br>
  Image: <input type="file" name="Image" accept="Image/*" class="form-control"><br>
  <input type="submit" name="submit" value="Submit" class="btn-primary btn">
</form>

@stop