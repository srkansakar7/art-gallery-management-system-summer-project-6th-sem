<title>Search Results</title>
@if(Session::has('admin'))
  <x-adminnav />
@elseif(Session::has('user')) 
<x-navigation />
@endif
<div id="m">
    <div id="main">
    <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    </div>
  @extends('masterstyle')

  <div class="custom-product">
     <div class="col-sm-3">
         <a href="#">Filter</a>
     </div>
     
     <a class="goback" href="/">&#8678;Back</a>
     <div class="col-sm-6">
     
      <div class="trending-wrapper">
        <h3 style="color:white;">Search Results for '{{$s}}'</h3>
        @foreach($products as $item)
        <div class="searched-item">
          <a href="detail/{{$item['id']}}">
          <img class="search-image" src="{{$item['gallery']}}">
          <div class="">
            <h3 style="color:white;">{{$item['name']}}</h3>
            <h5 style="color:white;">{{$item['description']}}</h5>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      </div>
</div>


<script src="{{url('/js/gallery.js')}}">

</script>
