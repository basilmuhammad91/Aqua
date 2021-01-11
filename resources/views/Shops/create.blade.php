@extends('master_dashboard')
@section('body')

<form method="post" action="{{action('ShopController@submit')}}" enctype="multipart/form-data" class="pl-5">
    <h4>Add Shops</h4><br>
  @csrf
  Name:<br>
  <input type="text" name="Name" class="form-control"><br>
  Phone:<br>
  <input type="phone" name="Phone" class="form-control"><br>
  UserName:<br>
  <input type="text" name="UserName" class="form-control"><br>
  Password:<br>
  <input type="password" name="Password" class="form-control"><br>
 Select Area: <br>
  <select name="TerritoryId" class="form-control">
    @foreach($territory as $t)
      <option value="{{$t->TerritoryId}}">{{$t->Name}}</option>
    @endforeach
  </select><br>
  Shop Slogan: <input type="text" name="Slogan" class="form-control"><br>
  Address: <br><textarea rows="2" cols="70" name="Address" class="form-control"></textarea><br>
  Description: <br><textarea rows="2" cols="70" name="Description" class="form-control"></textarea><br>
  Image: <input type="file" name="Image" accept="Image/*" class="form-control"><br>
  <input type="submit" name="submit" value="Submit" class="btn-primary btn">
</form>

@stop