<title>Home</title>

<link rel="stylesheet" href="{{url('/css/welcome.css')}}">
<x-navigation />

<div id="main">
  <span id="button" style="font-size:35px;cursor:pointer" onclick="openNav()">&#9776; </span>
</div>
<div id="m">
<h2>Best Gallery In Town</h2>
  <p>LOADING.....HOME PAGE</p>
<x-gallerygrid />
@extends('masterstyle')
<button onclick="topFunction()" id="TopBtn" title="Go to top">&#11014;</button>
</div>

<script src="{{url('/js/gallery.js')}}">
</script>
   

