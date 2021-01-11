@extends('master_dashboard')
@section('body')

<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
<div class="widget-content widget-content-area br-6" style="overflow: auto;">
  <span class="btn btn-dark">All Rides</span>
  <div class="table-responsive mb-4 mt-4" style="overflow: auto;">
      <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
        <!-- ShopId  Slogan  Address Lat Long  Image UserId  created_at  updated_at   -->
                <thead>
                    <tr>
                      <th>Id</th>
                      <th>Captain Name</th>
                      <th>User Name</th>
                      <th>Vehicle Type</th>
                      <th>Lat From</th>
                      <th>Long From</th>
                      <th>Lat To</th>
                      <th>Long To</th>
                      <th>Distance</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Type</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
              @foreach($rides as $r)
                   <tr>
                       <td>{{$r->RideId}}</td>
                       <td>{{$r->captain->User->Name}}</td>
                       <td>{{$r->user->Name}}</td>
                       <td>{{$r->vehicle->Type}}</td>
                       <td>{{$r->Lat_from}}</td>
                       <td>{{$r->Long_from}}</td>
                       <td>{{$r->Lat_to}}</td>
                       <td>{{$r->Long_to}}</td>
                       <td>{{$r->Distance}}</td>
                       <td>{{$r->Amount}}</td>
                       <td>{{$r->Status}}</td>
                       <td>{{$r->Type}}</td>
                       <td><a href="{{action('RideController@delete')}}?Id={{$r->RideId}}" class="btn-dark btn">Delete</a></td>
                     </tr>
              @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop