 
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
<div id="m"><h1>ADMIN CONTROL PAGE</h1>
    <div id="main"><p>NOTE: As an admin you wont be able to use the add to cart function.</p>
    <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    
    </div>
</div>
    <div id="m1">
    <a href="list">Show Product List</a><br>
    <a href="add">Add Product</a><br>
    <a href="orderlist">Orders</a><br>
    <a href="userlist">Users List</a> 
    </div>    
    
<link rel="stylesheet" href="<?php echo e(url('/css/admincontrol.css')); ?>">

<script src="<?php echo e(url('/js/admincontrol.js')); ?>">
</script><?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/admincontrol.blade.php ENDPATH**/ ?>