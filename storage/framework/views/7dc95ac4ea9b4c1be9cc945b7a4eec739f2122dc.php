<title>FAQ</title>
<style>
.c{
    height:500px;
    position:center;
}
img.c{
    display: block;
  margin-left: auto;
  margin-right: auto;
  width: 70%;
  
  opacity: 0.9 ;
  border-radius: 20px;
}
</style>
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
</div>
<div id="m">
<h2>FAQ</h2>
<div class="c"><img class="c" src="/storage/images/225820-P26B3J-936.jpg"></div>

</div>

<script src="<?php echo e(url('/js/gallery.js')); ?>">
</script>
   


<?php echo $__env->make('masterstyle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/faq.blade.php ENDPATH**/ ?>