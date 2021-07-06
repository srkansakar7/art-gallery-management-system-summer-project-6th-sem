@if(Session::has('admin'))
  <x-adminnav />
@endif
<x-navigation />

<div id="m">
    <div id="main">
    <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    </div>
  @extends('masterstyle')
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($products as $item)
            <div class="item {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
              <img class="slider-img" src="{{$item['gallery']}}">
            <div class="carousel-caption slider-text">
              <h3>{{$item['name']}}</h3>
              <p>{{$item['description']}}</p>
            </div>
            </a>
            </div>
          <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>

        </ol>
    
          @endforeach
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach($products as $item)
        <div class="trening-item">
          <a href="detail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['gallery']}}">
          <div class="trendingitemname">
            <h4>{{$item['name']}}</h4>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      </div>
</div>
</div></div>
<script src="{{url('/js/gallery.js')}}">

</script>
