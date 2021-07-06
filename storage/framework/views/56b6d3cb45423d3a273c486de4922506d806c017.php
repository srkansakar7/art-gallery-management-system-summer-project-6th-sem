<style>
    table, td, tr{
        padding: 5px;
        border: 1px solid maroon;
        border-collapse: collapse;
    }
    #m{transition: margin-left .5s;
}
    #main span{
    position: fixed;
    top: 6 ;
    left: 0;
    width: 100%;
    background-color:rgba(0, 0, 0, 0);
}
    a.goback{
    font-size:25px;
    color:red;
    position: absolute;
    top: 30px;
    right: 15;
    text-decoration: none;
    font-family: 'Arial';
}
a.goback:hover{
    font-size:25px;
    color:yellow;
    position: absolute;
    top: 30px;
    right: 15;
    text-decoration: none;
}
a{
    color:skyblue;
    text-decoration:none;
}
a:hover{
    text-decoration: none;
}
</style>
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
<div id="m">
    <div id="main"><p>NOTE: As an admin you wont be able to use the add to cart function.</p>
    <span id="button" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
    <table id="o" style="color:red;">
        <tr>
            <td>Order ID</td>
            <td>User ID</td>
            <td>Product ID</td>
            <td>Status</td>
            <td>Payment Method</td>
            <td>Address</td>
            <td>Payment Status</td>
            <td>Username</td>
            </tr>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr><td><?php echo e($order['id']); ?></td>
                <td><a href="userlist"><?php echo e($order['user_id']); ?></a></td>
                <td><?php echo e($order['product_id']); ?></td> 
                <td><?php echo e($order['status']); ?></td>
                <td><?php echo e($order['payment_method']); ?></td>
                <td><?php echo e($order['address']); ?></td>
                <td><?php echo e($order['payment_status']); ?></td>
           
                <td><a href=<?php echo e("delete/".$order['id']); ?>>Delete</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <a class="goback" href="admincontrol">&#8678;Back</a>
    </div></div>
<script src="<?php echo e(url('/js/admincontrol.js')); ?>"> 
</script><?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/orderlist.blade.php ENDPATH**/ ?>