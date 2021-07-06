<?php
//this is registration page
?>

<!DOCTYPE html>
<html>
<head><title>Registration Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo e(url('/css/admin.css')); ?>">
</head>
<body>
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

<div id="main">
  <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
  <h2>Best Gallery In Town</h2>
  <p>This is Registration Page</p>
  <?php if($errors->any()): ?>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <li><?php echo e($err); ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>
  <form method="post" action="AdminLogin">
  <?php echo csrf_field(); ?>
    <table>
    <br>
    
    <tr><td>Name:</td><td><input type="text" name="admin" required placeholder="Enter your name here"></td>
    </tr>
    <tr><td>Email:</td><td><input type="email" name="email" required placeholder="Enter your email here"></td></tr>
    <tr><td>Password:</td><td><input type="password" name="password" required placeholder="Enter your password here"></td></tr>
    <tr><td>Address:</td><td><input type="text" name="address" required placeholder="Enter your address here"></td></tr>
    <tr><td>Contact No.:</td><td><input type="text" name="contact" required placeholder="Enter your contact no. here"></td></tr>
    <tr><td><input type="submit" value="REGISTER" name="submit" >
		<input type="reset" value="RESET"></td></tr>
	</form>
  
	</table>
</div>


<script src="<?php echo e(url('/js/loginnav.js')); ?>"></script>

   
</body>
</html> 
<?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/AdminLogin.blade.php ENDPATH**/ ?>