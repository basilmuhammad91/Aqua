@extends('master_dashboard')
@section('body')


<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
<div class="widget-content widget-content-area br-6" style="overflow: auto"> 
  <a href="{{action('ProductController@create')}}" class="btn btn-secondary">Add New Product</a>
    <div class="table-responsive mb-4 mt-4" style="overflow: auto;">
        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
          <!-- ShopId  Slogan  Address Lat Long  Image UserId  created_at  updated_at   -->
                  <thead>
                      <tr>
                        <th>Product Id</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                        <th>Sub Category / Category</th>
                        <th>Shop Name</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                @foreach($products as $p)
                     <tr>
                         <td>{{$p->ProductId }}</td>
                         <td>{{$p->Name}}</td>
                         <td>{{$p->Description}}</td>
                         <td>{{$p->Price}}</td>
                         <td>{{$p->Quantity}}</td>
                         <td>{{$p->Unit}}</td>
                         <td>{{$p->subcategory->Name}} / {{$p->subcategory->category->Name}}</td>
                         <td>{{$p->shop->Slogan}}</td>
                         <td>
                            <div class="d-flex">
                                <div class="usr-img-frame mr-2 rounded-circle">
                                    <img alt="avatar" class="img-fluid rounded-circle" 
                                    src="{{asset('storage')}}/{{$p->Image}}">
                                </div>
                            </div>
                          </td>
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