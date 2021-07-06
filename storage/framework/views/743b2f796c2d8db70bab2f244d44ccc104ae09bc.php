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
<?php endif; ?>
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

<div id="m">
    <div id="main">
    <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    </div>

<div class="container">
   <div class="row">
       <div class="col-sm-6">
            <img class="detail-img" src="<?php echo e($product['gallery']); ?>" >
       </div>
       <a class="goback" href="/sale">&#8678;Back</a>
       <div class="col-sm-6">
          
            <h2 style="color:white;"><?php echo e($product['name']); ?></h2>
            <h3 style="color:white;">Price : Rs.<?php echo e($product['price']); ?></h3>
            <h4 style="color:white;">Details: <?php echo e($product['description']); ?></h4>
            <h4 style="color:white;">Category: <?php echo e($product['category']); ?></h4>
             <br><br>
             <form action="/addToCart" method="POST">
             <?php echo csrf_field(); ?>
             <input type="hidden" name="product_id" value="<?php echo e($product['id']); ?>">
            <button class="btn btn-primary">Add to Cart</button>
            </form> 
            
                <button class="btn btn-success">Buy Now</button>
            <br><br>
     </div>
   </div>
</div>

<script src="<?php echo e(url('/js/gallery.js')); ?>">

</script>
<?php echo $__env->make('masterstyle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/detail.blade.php ENDPATH**/ ?>