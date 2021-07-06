<title>Order Detail Page</title>
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
    
    <a class="goback" href="cartList" style="font-size:18px;font-family: 'Candara';">&#8678;Go Back</a>
    <br><br>
    <div class="custom-product">
        <div class="col-sm-10">
            <table class="table">
                <tbody>
                <tr>
                    <td>Amount</td>
                    <td>Rs. <?php echo e($total); ?></td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>Rs. 0</td>
                </tr>
                <tr>
                    <td>Delivery Charge</td>
                    <td>Rs. 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                <td>Rs. <?php echo e($total+10); ?></td>
                </tr>
                </tbody>
            </table>
            <div>
                <form action="orderplace" method="POST" >
                <?php echo csrf_field(); ?>
                <div class="form-group">
                   
                </div>
                    <div class="form-group">
                        <label for="pwd">Payment Method:</label> <br> <br>
                        <input type="radio" value="e-Sewa" name="payment"> <span>e-Sewa</span> <br> <br>
                        <input type="radio" value="cash" name="payment"> <span>PayPal payment</span> <br><br>
                        <input type="radio" value="cash on delivery" name="payment"> <span>Payment on Delivery</span> <br> <br>
                    </div>
                    <button type="submit" class="btn btn-default">Order Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo e(url('/js/gallery.js')); ?>">

</script>
<?php echo $__env->make('masterstyle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\proj\resources\views/orderNow.blade.php ENDPATH**/ ?>