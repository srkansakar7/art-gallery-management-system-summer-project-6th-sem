<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total= ProductController::cartItem();
}
?>

<div class="searchbar">
<nav>
<form action="/search" class="navbar-form navbar-left">
<div class="form-group" id="searchbar">
   <input type="text" name="query"required placeholder="Search">
</div>
<button type="submit" class="searchbtn">&#128269;</button>
</form>
</div>
<a href="cartList" class="addcart">Cart(<?php echo e($total); ?>)</a>
</nav><?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/header.blade.php ENDPATH**/ ?>