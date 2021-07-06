<title>Home</title>

<link rel="stylesheet" href="<?php echo e(url('/css/welcome.css')); ?>">
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
  <span id="button" style="font-size:35px;cursor:pointer" onclick="openNav()">&#9776; </span>
</div>
<div id="m">
<h2>Best Gallery In Town</h2>
  <p>LOADING.....HOME PAGE</p>
 <?php if (isset($component)) { $__componentOriginal0e87614f8cbaa5d08108b58ec36a16f5359a0fc2 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Gallerygrid::class, []); ?>
<?php $component->withName('gallerygrid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal0e87614f8cbaa5d08108b58ec36a16f5359a0fc2)): ?>
<?php $component = $__componentOriginal0e87614f8cbaa5d08108b58ec36a16f5359a0fc2; ?>
<?php unset($__componentOriginal0e87614f8cbaa5d08108b58ec36a16f5359a0fc2); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

<button onclick="topFunction()" id="TopBtn" title="Go to top">&#11014;</button>
</div>

<script src="<?php echo e(url('/js/gallery.js')); ?>">
</script>
   


<?php echo $__env->make('masterstyle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/welcome.blade.php ENDPATH**/ ?>