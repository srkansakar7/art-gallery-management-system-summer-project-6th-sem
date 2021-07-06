<link rel="stylesheet" href="<?php echo e(url('/css/nav.css')); ?>">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&#9776;</a>
  <a href="home" class="nav">Best Gallery In Town</a><br>
  <?php if(Session::has('user')): ?>
  <a>Welcome | <?php echo e(Session::get('user')['name']); ?></a>
  <?php endif; ?>
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
  <?php if(Session::has('user')): ?>
  <a href="myOrders">My Orders</a>
  <?php else: ?>
  <a href="register">Registration</a>
  <a href="CustomerLogin">Customer Login</a>
  <?php endif; ?>
  <a href="/sale">Paintings on sale</a>
  <a href="FAQ">FAQ</a>
  <a href="Services">Our Services</a>
  <a href="AboutUs">About Us</a>
  <?php if(Session::has('user')): ?>
  <a href="LogOut">Logout</a>
  <?php endif; ?>

</div>


<?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/components/navigation.blade.php ENDPATH**/ ?>