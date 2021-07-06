<title>Our Gallery</title>
<link rel="stylesheet" href="{{url('/css/gallery.css')}}">
@if(Session::has('admin'))
<x-adminnav />
@else
<x-navigation />
@endif

<div id="main">
  <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

</div>
<div id="m">
@extends('masterstyle') 
<p>LOADING.....Gallery Page</p>
<x-gallerygrid />

<button onclick="topFunction()" id="TopBtn" title="Go to top">&#11014;</button>

</div>
<script src="{{url('/js/gallery.js')}}"></script>
