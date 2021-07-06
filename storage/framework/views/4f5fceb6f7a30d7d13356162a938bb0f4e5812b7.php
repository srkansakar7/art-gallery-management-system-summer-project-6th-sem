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
    

<div class="cart-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/<?php echo e($item->id); ?>">
                    <img class="cart-image" src="<?php echo e($item->gallery); ?>">
                  </a>
             </div>
             <div class="col-sm-7">
                    <div class="">
                      <h3>Item Name:<?php echo e($item->name); ?></h3>
                      <h5 class="des">Price: Rs.<?php echo e($item->price); ?></h5>
                      <h5 class="des">Delivery Status: <?php echo e($item->status); ?></h5>
                      <h5 class="des">Payment Method:<?php echo e($item->payment_method); ?></h5>
                      <h5 class="des">Payment Status:<?php echo e($item->payment_status); ?></h5>
                      <h5 class="des">Address: <?php echo e($item->address); ?></h5>      
                    </div>
             </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
     </div>
</div>
</div>

<script src="<?php echo e(url('/js/cartlist.js')); ?>">

</script>
<?php echo $__env->make('masterstyle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/myOrders.blade.php ENDPATH**/ ?>