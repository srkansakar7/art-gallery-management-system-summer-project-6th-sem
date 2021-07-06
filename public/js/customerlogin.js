function openNav() {
    document.getElementById("mySidenav").style.width = "300px";
    document.getElementById("main").style.marginLeft = "290px";
    document.getElementById("f").style.marginLeft = "380px"; //responsive form postion
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    document.getElementById("button").style.color="rgba(0,0,0,0.4)";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.getElementById("f").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
    document.getElementById("button").style.color="#f1f1f1";
  }