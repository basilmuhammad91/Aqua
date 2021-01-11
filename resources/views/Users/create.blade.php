@extends('master_dashboard')
@section('body')


<form method="post" action="{{action('UsersController@submit')}}" class="col-6">
<h4>Add Users</h4><br>
  @csrf
  Name:<br>
  <input type="text" name="Name" class="form-control"><br>
  Phone:<br>
  <input type="phone" name="Phone" class="form-control"><br>
  UserName:<br>
  <input type="text" name="UserName" class="form-control"><br>
  Password:<br>
  <input type="password" name="Password" class="form-control"><br>
  <!-- Type:
  <select name="Type">
    <option value="Captain">Captain</option>
    <option value="User">User</option>
  </select> -->
 Territory: <br>
  <select name="TerritoryId" class="form-control">
    @foreach($territory as $t)
      <option value="{{$t->TerritoryId}}">{{$t->Name}}</option>
    @endforeach
  </select><br>
  <input type="submit" name="submit" value="submit" class="btn btn-primary">

  

</form>

@stop