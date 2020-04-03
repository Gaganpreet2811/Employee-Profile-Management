<?php /* E:\xampp\htdocs\Emp\resources\views/admin/calendar/event.blade.php */ ?>
<?php $__env->startSection('content'); ?>

    <div id="main-wrapper">

        <?php echo $__env->make('admin.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">

                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Calendar</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <h4 class="page-title">Calendar</h4>
                    <div class="jumbotron">
                        <div class="row">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
                            <a href="<?php echo e(url('calendar/add')); ?>" class="btn btn-success">Add events</a>
                            <?php endif; ?>
                            
                            
                        </div><br>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading" style="background: #2e642e; color: white">
                                        Full calendar
                                    </div>
                                    <div class="panel-body">
                                        <?php echo $calendar->calendar(); ?>

                                        <?php echo $calendar->script(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <footer class="footer text-center">
                All Rights Reserved by Khoz Informatics Pvt. Ltd. Designed and Developed by <a href="https://khozinfo.com/">Khozinfo</a>.
            </footer>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>