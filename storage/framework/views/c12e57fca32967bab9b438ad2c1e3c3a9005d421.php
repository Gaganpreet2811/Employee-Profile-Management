<?php /* E:\xampp\htdocs\Emp\resources\views/admin/layout/master.blade.php */ ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <?php echo $__env->make('admin.includes.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
    
        
            
            
        
    
    <div id="main-wrapper">
       <?php echo $__env->make('admin.includes.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
       <?php echo $__env->make('admin.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

       <?php echo $__env->yieldContent('content'); ?>

    </div>
    <?php echo $__env->make('admin.includes.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('js'); ?>

</body>

</html>