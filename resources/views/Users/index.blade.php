@extends('master_dashboard')
@section('body')


<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
<div class="widget-content widget-content-area br-6">
  <a href="{{action('UsersController@create')}}" class="btn btn-secondary">Create New User</a>
    <div class="table-responsive mb-4 mt-4">
        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                  <thead>
                      <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>UserName</th>
                        <th>Password</th>
                        <th>Type</th>
                        <th>Country</th>
                        <th>Province</th>
                        <th>City</th>
                        <th>Territory</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                @foreach($users as $u)
                
                     <tr>
                         <td>{{$u->Name}}</td>
                         <td>{{$u->Phone}}</td>
                         <td>{{$u->UserName}}</td>
                         <td>{{$u->Password}}</td>
                         <td>{{$u->Type}}</td>
                         <td>{{$u->Territory->City->Province->Country->Name}}</td>
                         <td>{{$u->Territory->City->Province->Name}}</td>
                         <td>{{$u->Territory->City->Name}}</td>
                         <td>{{$u->Territory->Name}}</td>
                     
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