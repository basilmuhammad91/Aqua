@extends('master_dashboard')
@section('body')


<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
<div class="widget-content widget-content-area br-6" style="overflow: auto;">
  <a href="{{action('CaptainController@create')}}" class="btn btn-secondary">Create New Captain</a>
    <div class="table-responsive mb-4 mt-4" style="overflow: auto;">
        <table id="html5-extension" class="table table-hover non-hover" style="width:100%"">
          <!-- CNIC`, `Image`, `IsOnRide`, `IsOnDuty`, `IsActive`, `UserId`, `Lat`, `Long`, `EmergencyContactNo` -->
                  <thead>
                      <tr>
                        <th>Image</th>
                        <th>Name<br>UserName</th>
                        <th>Phone</th>
                        <th>Password</th>
                        <th>Territory</th>
                        <th>CNIC</th>
                        <th>IsOnRide,<br>
                        IsOnDuty,<br>
                        IsActive</th>
                        <th>EmergencyContactNo</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                @foreach($captains as $c)
                
                     <tr>
                      <td>
                        <div class="d-flex">
                            <div class="usr-img-frame mr-2 rounded-circle">
                                <img alt="avatar" class="img-fluid rounded-circle" 
                                src="{{asset('storage')}}/{{$c->Image}}">
                            </div>
                        </div>
                      </td>
                         <td>{{$c->User->Name}}<br>{{$c->User->UserName}}</td>
                         <td>{{$c->User->Phone}}</td>
                         
                         <td>{{$c->User->Password}}</td>
                         <td>{{$c->User->Territory->City->Province->Country->Name}},
                         {{$c->User->Territory->City->Province->Name}},
                         {{$c->User->Territory->City->Name}},
                        {{$c->User->Territory->Name}}</td>
                        <td>{{$c->CNIC}}</td>
                        <td>{{$c->IsOnRide?"Yes":"No"}},
                        {{$c->IsOnDuty?"Yes":"No"}},
                        {{$c->IsActive?"Yes":"No"}}</td>
                        <td>{{$c->EmergencyContactNo}}</td>
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