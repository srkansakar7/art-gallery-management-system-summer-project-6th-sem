<title>Search Results</title>
<?php if(Session::has('admin')): ?>
   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.adminnav','data' => []]); ?>
<?php $component->withName('adminnav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php elseif(Session::has('user')): ?> 
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
<?php endif; ?>
<div id="m">
    <div id="main">
    <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    </div>
  

  <div class="custom-product">
     <div class="col-sm-3">
         <a href="#">Filter</a>
     </div>
     
     <a class="goback" href="/">&#8678;Back</a>
     <div class="col-sm-6">
     
      <div class="trending-wrapper">
        <h3 style="color:white;">Search Results for '<?php echo e($s); ?>'</h3>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="searched-item">
          <a href="detail/<?php echo e($item['id']); ?>">
          <img class="search-image" src="<?php echo e($item['gallery']); ?>">
          <div class="">
            <h3 style="color:white;"><?php echo e($item['name']); ?></h3>
            <h5 style="color:white;"><?php echo e($item['description']); ?></h5>
          </div>
        </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      </div>
</div>


<script src="<?php echo e(url('/js/gallery.js')); ?>">

</script>

<?php echo $__env->make('masterstyle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/search.blade.php ENDPATH**/ ?>