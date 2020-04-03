<?php /* E:\xampp\htdocs\Empmychanges\resources\views/admin/profile/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>

    <div id="main-wrapper">
    <?php echo $__env->make('admin.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">My profile</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('employee')); ?>">Profile</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-5">
                        <div class="box  box-success">
                            <div class="panel">

                                <div class="panel-heading">
                                    <span class="panel-title">Personal Details</span>
                                </div>
                                <div class="panel-body pn pb5">
                                    <hr class="short br-lighter">


                                    <div class="box-body  no-padding">

                                        <table class="table">
                                            <tbody>
                                            

                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-birthday-cake"></i>
                                                    </td>
                                                    <td><strong>Username</strong></td>
                                                    <td><?php echo e($user->username); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-birthday-cake"></i>
                                                    </td>
                                                    <td><strong>Birthday</strong></td>
                                                    <td><?php echo e($user->dob); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-genderless"></i>
                                                    </td>
                                                    <td><strong>Gender</strong></td>
                                                    <td><?php echo e($user->gender); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-mobile-alt"></i>
                                                    </td>
                                                    <td><strong>Phone number</strong></td>
                                                    <td><?php echo e($user->phone); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-mobile-alt"></i>
                                                    </td>
                                                    <td><strong>Email</strong></td>
                                                    <td><?php echo e($user->email); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-calendar-times"></i>
                                                    </td>
                                                    <td><strong>Join date</strong></td>
                                                    <td><?php echo e($user->join_date); ?></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px" class="text-center"><i class="fa fa-map-marker"></i>
                                                    </td>
                                                    <td><strong>Address</strong></td>
                                                    <td><?php echo e($user->address); ?></td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                        
                            
                            <a href="<?php echo e(route('user.edit',$user->id)); ?>" class="btn btn-sm btn-dark">Edit</a>

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
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>