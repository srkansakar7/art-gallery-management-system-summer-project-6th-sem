<x-navigation />
<div id="m">
    <div id="main">
    <span id="button" style="font-size:35px;cursor:pointer" onclick="openNav()">&#9776; </span>
    
@extends('masterstyle')
<div class="cart-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a class="btn btn-success" href="orderNow">Order Now</a> <br> <br>
            @foreach($products as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="cart-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5 class="des">{{$item->description}}</h5>
                      <h5 class="des">Rs.{{$item->price}}</h5>      
                    </div>
             </div>
             <div class="col-sm-3">
                <a href="removeCart/{{$item->carts_id}}" class="btn btn-warning" >Remove From Cart</a>
             </div>
            </div>
            @endforeach
            <a class="btn btn-success" href="orderNow">Order Now</a> <br> <br>

          </div>
     </div>
</div>
</div>

<script src="{{url('/js/cartlist.js')}}">

</script>