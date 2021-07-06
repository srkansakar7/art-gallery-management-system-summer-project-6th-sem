@if(Session::has('admin'))
  <x-adminnav />
@endif
<x-navigation />

<div id="m">
    <div id="main">
    <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    </div>
@extends('masterstyle')
<div class="container">
   <div class="row">
       <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" >
       </div>
       <a class="goback" href="/sale">&#8678;Back</a>
       <div class="col-sm-6">
          
            <h2 style="color:white;">{{$product['name']}}</h2>
            <h3 style="color:white;">Price : Rs.{{$product['price']}}</h3>
            <h4 style="color:white;">Details: {{$product['description']}}</h4>
            <h4 style="color:white;">Category: {{$product['category']}}</h4>
             <br><br>
             <form action="/addToCart" method="POST">
             @csrf
             <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-primary">Add to Cart</button>
            </form> 
            
                <button class="btn btn-success">Buy Now</button>
            <br><br>
     </div>
   </div>
</div>

<script src="{{url('/js/gallery.js')}}">

</script>