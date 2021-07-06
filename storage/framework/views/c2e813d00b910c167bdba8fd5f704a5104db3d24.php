<!DOCTYPE html>
<html>
<head><title>Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo e(url('/css/login.css')); ?>">
</head>
 <?php if (isset($component)) { $__componentOriginale50e17b184145c8d671bd4a72ac0d887f47f1a0e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Navigation::class, []); ?>
<?php $component->withName('navigation'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginale50e17b184145c8d671bd4a72ac0d887f47f1a0e)): ?>
<?php $component = $__componentOriginale50e17b184145c8d671bd4a72ac0d887f47f1a0e; ?>
<?php unset($__componentOriginale50e17b184145c8d671bd4a72ac0d887f47f1a0e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<body>

<div class="hero-image" id="hi">


<div id="main">
  <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
  <p><h1>LOGIN PAGE</h1></p>
  <div class="hero-text">
    
  <form method="POST" action="CustomerLogin">
    <table id="f">
    <?php echo csrf_field(); ?>
    <tr><td>Email:</td><td><input type="email" name="email" required placeholder="Enter your email here"></td></tr>
    <tr><td>Password:</td><td><input type="password" name="password" required placeholder="Enter your password here"></td></tr>
    
    <tr><td><input type="submit" value="LOGIN" name="submit">
		<input type="reset" value="RESET"></td></tr>
	</form>
	</table>
 
  </div>
</div>


<?php
//<p>Note that this technique will also make the image responsive: Resize the browser window to see the effect.</p>
?>
<script src="<?php echo e(url('/js/customerlogin.js')); ?>">

</script>
   
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/CustomerLogin.blade.php ENDPATH**/ ?>