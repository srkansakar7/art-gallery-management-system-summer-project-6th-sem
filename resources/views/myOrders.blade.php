<x-navigation />
<div id="m">
    <div id="main">
    <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    
@extends('masterstyle')
<div class="cart-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="cart-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-7">
                    <div class="">
                      <h3>Item Name:{{$item->name}}</h3>
                      <h5 class="des">Price: Rs.{{$item->price}}</h5>
                      <h5 class="des">Delivery Status: {{$item->status}}</h5>
                      <h5 class="des">Payment Method:{{$item->payment_method}}</h5>
                      <h5 class="des">Payment Status:{{$item->payment_status}}</h5>
                      <h5 class="des">Address: {{$item->address}}</h5>      
                    </div>
             </div>
            </div>
            @endforeach

          </div>
     </div>
</div>
</div>

<script src="{{url('/js/cartlist.js')}}">

</script>