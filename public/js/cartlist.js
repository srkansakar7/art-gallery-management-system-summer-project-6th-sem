function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("main").style.marginLeft = "150px";
    document.getElementById("m").style.marginLeft = "120px"; //responsive form postion
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
