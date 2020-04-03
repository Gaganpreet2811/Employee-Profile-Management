<?php /* E:\xampp\htdocs\Emp\resources\views/admin/dashboard/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>

    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
                
                <!-- Column -->
                <div class="col-md-6 col-lg-12 col-xlg-3">
                    <div class="card card-hover">
                        <div class="bg-success text-center">
                            <h3 class="text-white">You have logged in as an Employee</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-12 col-xlg-3">
                    <div class="card  card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                            <h5 class="m-b-0 m-t-5 text-white"><?php echo e($users->total()); ?></h5>
                            <h6 class="text-white">Total employees</h6>
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    <script src="<?php echo e(asset('admin-panel/assets/libs/flot/excanvas.js')); ?>"></script>
    <script src="<?php echo e(asset('admin-panel/assets/libs/flot/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('admin-panel/assets/libs/flot/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(asset('admin-panel/assets/libs/flot/jquery.flot.time.js')); ?>"></script>
    <script src="<?php echo e(asset('admin-panel/assets/libs/flot/jquery.flot.stack.js')); ?>"></script>
    <script src="<?php echo e(asset('admin-panel/assets/libs/flot/jquery.flot.crosshair.js')); ?>"></script>
    <script src="<?php echo e(asset('admin-panel/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin-panel/dist/js/pages/chart/chart-page-init.js')); ?>"></script>

    <script src="<?php echo e(asset('admin-panel/assets/libs/jquery/dist/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin-panel/dist/js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin-panel/assets/libs/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin-panel/dist/js/custom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin-panel/assets/libs/moment/min/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin-panel/assets/libs/fullcalendar/dist/fullcalendar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin-panel/dist/js/pages/calendar/cal-init.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>