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
    <table style="color:red;">
        <tr>
            <td>User ID</td>
            <td>Username</td>
            <td>Contact</td>
            <td>Address</td>
            <td>Actions</td>
            </tr>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr><td><?php echo e($u['id']); ?></td>
                <td><?php echo e($u['name']); ?></td> 
                <td><?php echo e($u['contact']); ?></td> 
                <td><?php echo e($u['address']); ?></td>
                <td><a href=<?php echo e("delete/".$u['id']); ?>>Delete</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <a class="goback" href="admincontrol">&#8678;Back</a>
    </div></div>
<script src="<?php echo e(url('/js/admincontrol.js')); ?>"> 
</script><?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/userlist.blade.php ENDPATH**/ ?>