@extends('master_dashboard')
@section('body')

<form method="post" action="{{action('ProductController@submit')}}" enctype="multipart/form-data" class="pl-5">
    <h4>Add Products</h4><br>
  @csrf
  
  Name: <input type="text" name="Name" class="form-control"><br>
  Description: <br><textarea rows="2" cols="70" name="Description" class="form-control"></textarea><br>
  Price: <br>
  <input type="number" name="Price" class="form-control"><br>
  Quantity: <br>
  <input type="number" name="Quantity" class="form-control"><br>
  Unit: <br>
  <input type="text" name="Unit" class="form-control"><br>
  Select Category: <br>
  <select name="CategoryId" class="form-control" id="CategoryId">
    <option>Select</option>
    @foreach($cat as $c)
      <option value="{{$c->CategoryId}}">{{$c->Name}}</option>
    @endforeach
  </select><br>
  Select Sub Category: <br>
  <select name="SubCatId" class="form-control" id="SubCatId">
  	<option>Select</option>
  </select><br>
  Select Shop: <br>
  <select name="ShopId" class="form-control">
    <option>Select</option>
    @foreach($shops as $s)
      <option value="{{$s->ShopId}}">{{$s->Slogan}}</option>
    @endforeach
  </select>
  Image: <input type="file" name="Image" accept="Image/*" class="form-control"><br>
  <input type="submit" name="submit" value="Submit" class="btn-primary btn">
</form>

@stop


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
   // alert("ok")

    $('#CategoryId').change(function(){
        //alert()
        var cat=document.getElementById('SubCatId');
        
    var CategoryId=$(this).val()
        $.ajax({
            url:"{{action('ProductController@getSubCategories')}}?CategoryId="+CategoryId,
            success:function(res){
                cat.innerHTML="";
                res.forEach(function(item){
                    cat.innerHTML+="<option value='"+item.SubCatId +"'>"+item.Name+"</option>";
                });
            }
        })

    });

});
</script>