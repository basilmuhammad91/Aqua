@extends('master_dashboard')
@section('body')

<form method="post" action="{{action('VehicleController@submit')}}" enctype="multipart/form-data" class="pl-5 col-6">

  <h4>Add Vehicle</h4><br>
  @csrf

  Type: <select name="Type" class="form-control">
    <option>Select</option>
    <option value="Bike">Bike</option>
    <option value="Car">Car</option>
    <option value="Auto">Auto</option>
    <option value="Cargo">Cargo</option>
  </select><br>

  Vehicle Number: <input type="text" name="VehicleNo" class="form-control"><br>

  Wheels: <select name="Wheels" class="form-control">
    <option>Select</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select><br>

  Model: <input type="text" name="Model" class="form-control"><br>

  Brand: <input type="text" name="Brand" class="form-control"><br>

  Is AC: <select name="IsAC" class="form-control">
    <option>Select</option>
    <option value="1">Yes</option>
    <option value="0">No</option>
  </select><br>

  Color: <input type="text" name="Color" class="form-control"><br>

  Captain: <select name="CaptainId" class="form-control">
    <option>Select</option>
    @foreach($captain as $c)
      <option value="{{$c->CaptainId}}">{{$c->User->Name}}</option>
    @endforeach
  </select><br>

  Vehicle Owner: <select name="VehicleOwnerId" class="form-control">
    <option>Select</option>
    @foreach($vehicle_owner as $v)
      <option value="{{$v->VehicleOwnerId}}">{{$v->users->Name}}</option>
    @endforeach
  </select><br>

  <input type="submit" name="submit" value="Submit" class="btn-primary btn">
</form>

@stop