<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom:20px;
  width: 100%;
  text-align: center;
}
.mySlides {
  display:none;
}
.active-slide {
  display:block;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<h2>Automatic Slideshow</h2>
<p>Change image every 2 seconds:</p>

<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="http://www.w3schools.com/howto/img_mountains_wide.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="http://www.w3schools.com/howto/img_fjords_wide.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="http://www.w3schools.com/howto/img_nature_wide.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  
    <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="http://placehold.it/1000x350" style="width:100%">
    <div class="text">Caption Four</div>
  </div>

  <a class="prev">&#10094;</a>
  <a class="next">&#10095;</a>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot" ></span>
  <span class="dot" ></span>
   <span class="dot"></span>
</div>
</div>
<br>








<div class="slideshow-container">
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="/storage/gallery/pawel-czerwinski-6lQDFGOB1iw-unsplash.jpg"  height="500" width="1000">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="/storage/gallery/pexels-daniel-frank-604285.jpg" height="500" width="1000">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="/storage/images/adminbg.jpg" height="500" width="1000">
    <div class="text">Caption Three</div>
  </div>

  <a class="prev" >&#10094;</a>
  <a class="next">&#10095;</a>
<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>  
</div>


<br>
<script>
(function() {

init(); //on page load - show first slide, hidethe rest

function init() {

  parents = document.getElementsByClassName('slideshow-container');

  for (j = 0; j < parents.length; j++) {
    var slides = parents[j].getElementsByClassName("mySlides");
    var dots = parents[j].getElementsByClassName("dot");
    slides[0].classList.add('active-slide');
    dots[0].classList.add('active');
  }
}

dots = document.getElementsByClassName('dot'); //dots functionality

for (i = 0; i < dots.length; i++) {

  dots[i].onclick = function() {

    slides = this.parentNode.parentNode.getElementsByClassName("mySlides");

    for (j = 0; j < this.parentNode.children.length; j++) {
      this.parentNode.children[j].classList.remove('active');
      slides[j].classList.remove('active-slide');
      if (this.parentNode.children[j] == this) {
        index = j;
      }
    }
    this.classList.add('active');
    slides[index].classList.add('active-slide');

  }
}
//prev/next functionality
links = document.querySelectorAll('.slideshow-container a');

for (i = 0; i < links.length; i++) {
  links[i].onclick = function() {
    current = this.parentNode;

    var slides = current.getElementsByClassName("mySlides");
    var dots = current.getElementsByClassName("dot");
    curr_slide = current.getElementsByClassName('active-slide')[0];
    curr_dot = current.getElementsByClassName('active')[0];
    curr_slide.classList.remove('active-slide');
    curr_dot.classList.remove('active');
    if (this.className == 'next') {

      if (curr_slide.nextElementSibling.classList.contains('mySlides')) {
        curr_slide.nextElementSibling.classList.add('active-slide');
        curr_dot.nextElementSibling.classList.add('active');
      } else {
        slides[0].classList.add('active-slide');
        dots[0].classList.add('active');
      }

    }

    if (this.className == 'prev') {

      if (curr_slide.previousElementSibling) {
        curr_slide.previousElementSibling.classList.add('active-slide');
        curr_dot.previousElementSibling.classList.add('active');
      } else {
        slides[slides.length - 1].classList.add('active-slide');
        dots[slides.length - 1].classList.add('active');
      }

    }

  }

}
})();
</script>

</body>
</html> 