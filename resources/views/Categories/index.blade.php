@extends('master_dashboard')
@section('body')


<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
<div class="widget-content widget-content-area br-6">
  <a href="{{action('ProductCategoryController@create')}}" class="btn btn-secondary">Create New Category</a>
    <div class="table-responsive mb-4 mt-4">
        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
          <!-- ShopId  Slogan  Address Lat Long  Image UserId  created_at  updated_at   -->
                  <thead>
                      <tr>
                        <th>Category Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                @foreach($cat as $c)
                     <tr>
                         <td>{{$c->CategoryId}}</td>
                         <td>{{$c->Name}}</td>
                         <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle" 
                                    src="{{asset('storage')}}/{{$c->Image}}">
                                </div>
                            </div>
                          </td>
                         <td>
                         <div class="btn-group">
                             <button type="button" class="btn btn-dark btn-sm">Action</button>
                              <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                           </button>
                         <div class="dropdown-menu" aria-labelledby="dropdownMenuReference1">
                           <a class="dropdown-item" href="#">Edit</a>
                           <a class="dropdown-item" href="#">Delete</a>
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