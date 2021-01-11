@extends('master_dashboard')
@section('body')

<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
<div class="widget-content widget-content-area br-6" style="overflow: auto;">
  <a href="{{action('VehicleOwnerController@create')}}" class="btn btn-secondary">Add New Vehicle Owner</a>
  <div class="table-responsive mb-4 mt-4" style="overflow: auto;">
      <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
        <!-- ShopId  Slogan  Address Lat Long  Image UserId  created_at  updated_at   -->
                <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>User Name</th>
                      <th>Password</th>
                      <th>Phone</th>
                      <th>Phone 2</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Area</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody>
              @foreach($vehicle_owner as $v)
                   <tr>
                       <td>{{$v->VehicleOwnerId}}</td>
                       <td>{{$v->users->Name}}</td>
                       <td>{{$v->users->UserName}}</td>
                       <td>{{$v->users->Password}}</td>
                       <td>{{$v->users->Phone}}</td>
                       <td>{{$v->Phone2}}</td>
                       <td>{{$v->Email}}</td>
                       <td>{{$v->Address}}</td>
                       <td>{{$v->users->territory->Name}}, {{$v->users->territory->City->Name}}</td>
                      
                       <td>
                       <div class="btn-group">
                           <button type="button" class="btn btn-dark btn-sm">Open</button>
                            <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                         </button>
                       <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                         <a class="dropdown-item" href="#">Action</a>
                         <a class="dropdown-item" href="#">Another action</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="#">Separated link</a>
                       </div>
                               </div>
                         </td>
                     </tr>
              @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@stop