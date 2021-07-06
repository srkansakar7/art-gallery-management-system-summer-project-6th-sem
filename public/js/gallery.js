function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("m").style.marginLeft = "300px"; //responsive form postion
    document.getElementById("button").style.color="rgba(0,0,0,0.4)";
    document.getElementById("m").style.color = "#818181";
    document.body.style.backgroundColor = "rgba(0,0,0,0.9)";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.getElementById("m").style.marginLeft = "0";
    document.getElementById("button").style.color="#f1f1f1";
    document.getElementById("m").style.color = "#f1f1f0";
    document.body.style.backgroundColor = "black";
    
  }
  //Get the button
var mybutton = document.getElementById("TopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

 