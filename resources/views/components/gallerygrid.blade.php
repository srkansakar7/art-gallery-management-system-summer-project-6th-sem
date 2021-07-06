<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>
<div id="m">

<!-- Header -->
<div class="header" id="myHeader">
  <h1>Image Grid</h1>
  <p>Click on the buttons to change the grid view.</p>
  <button class="btn active" onclick="four()">1</button>
  <button class="btn " onclick="two()">2</button>
  <button class="btn" onclick="four()">3</button>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="/storage/images/cafer.jpg" style="width:100%">
    <img src="/storage/images/highway.jpg" style="width:100%">
    <img src="/storage/images/lanad.jpg" style="width:100%">
    <img src="/storage/images/lean.jpg" style="width:100%">
    <img src="/storage/images/kidluffy.jpg" style="width:100%">
    <img src="/storage/images/one.jpg" style="width:100%">
    <img src="/storage/images/boat.jpg" style="width:100%">
    <img src="/storage/images/anime.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="/storage/images/boa.jpg" style="width:100%">
    <img src="/storage/images/images.jpg" style="width:100%">
    <img src="/storage/images/boaHancock1.jpg" style="width:100%">  
    <img src="/storage/images/songoku.jpg" style="width:100%">
    <img src="/storage/images/boat.jpg" style="width:100%">
    <img src="/storage/images/adminbg.jpg" style="width:100%">
    <img src="/storage/images/seras.jpg" style="width:100%">
    <img src="/storage/images/boaHancock1.jpg" style="width:100%">  
    <img src="/storage/images/lean.jpg" style="width:100%">  
    <img src="/storage/images/nami.jpg" style="width:100%">
  </div>  
  <div class="column">
    <img src="/storage/images/luff.jpg" style="width:100%">
    <img src="/storage/images/piece.jpg" style="width:100%">
    <img src="/storage/images/seras.jpg" style="width:100%">
    <img src="/storage/images/pexels-rahul-716398.jpg" style="width:100%">
    <img src="/storage/images/highway.jpg" style="width:100%">
    <img src="/storage/images/boat.jpg" style="width:100%">
    <img src="/storage/images/lanare.jpg" style="width:100%">
    <img src="/storage/images/lcmandy.jpg" style="width:100%">
  </div>
  <div class="column">
    <img src="/storage/images/kaori(1).jpg" style="width:100%">
    <img src="/storage/images/r15.jpg" style="width:100%">
    <img src="/storage/images/luff.jpg" style="width:100%">
    <img src="/storage/images/lanad.jpg" style="width:100%">
    <img src="/storage/images/adminbg.jpg" style="width:100%">
    <img src="/storage/images/boat.jpg" style="width:100%">
    <img src="/storage/images/anime.jpg" style="width:100%">
    <img src="/storage/images/boaHancock1.jpg" style="width:100%">  
    <img src="/storage/images/lean.jpg" style="width:100%">
  </div>
</div>
</div>
<script>
//GalleryGrid Script
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

</script>