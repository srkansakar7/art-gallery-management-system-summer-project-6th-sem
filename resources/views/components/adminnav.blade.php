<link rel="stylesheet" href="{{ url('/css/nav.css') }}">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#9776;</a>
  <a href="home" class="nav">Best Gallery In Town</a><br>
  @if(Session::has('admin'))
  <a>Welcome | {{Session::get('admin')['FullName']}}</a>
  @endif
  <a href="admincontrol">Control Page</a>
  <a href="OurGallery">Our Gallery</a>
  <div class="dropdown">
  <a href="categories" class="dropbtn">Categories</a>
  <div class="dropdown-content">
    <a href="#" style="font-size: 20px;">Nature</a>
    <a href="#" style="font-size: 20px;">Anime</a>
    <a href="#" style="font-size: 20px;">MotorBikes</a>
    <a href="#" style="font-size: 20px;">Paintings</a>
  </div>
  </div>
  <a href="Artists">About the Artists</a>
  
  <a href="/sale">Paintings on sale</a>
  <a href="FAQ">FAQ</a>
  <a href="Services">Our Services</a>
  <a href="AboutUs">About Us</a>
  @if(Session::has('admin'))
  <a href="LogOut">Logout</a>
  @endif

</div>


