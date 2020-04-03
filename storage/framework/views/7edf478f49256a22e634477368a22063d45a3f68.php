<?php /* E:\xampp\htdocs\Empmychanges\resources\views/admin/user/edit.blade.php */ ?>
<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('admin.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="page-wrapper">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
    <?php endif; ?>
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Admin Manager</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('user')); ?>">User</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <form action="<?php echo e(route('user.update',$user->id)); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            
                            <div class="card-body">
                                <h4 class="card-title">Edit and Update</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="username" class="form-control" id="username" value="<?php echo e($user->username); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">File Upload</label>
                                    <div class="col-md-9">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" value="<?php echo e($user->image); ?>">
                                            <label class="custom-file-label"><?php echo e($user->image); ?></label>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">First name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="fname" class="form-control" id="fname" value="<?php echo e($user->first_name); ?>" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Last name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="lname" class="form-control" id="lname" value="<?php echo e($user->last_name); ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Role</label>
                                    <div class="col-sm-9">
                                        
                                        <select type="text" name="role" class="form-control" id="lname">
                                            
                                            
                                            <option><?php echo e($user->role); ?></option>
                                            <option>admin</option>
                                            <option>employee</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="email" class="form-control" id="lname" value="<?php echo e($user->email); ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-sm-3 text-right control-label col-form-label">Phone number</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="phone" class="form-control" id="phone" value="<?php echo e($user->phone); ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="address" class="form-control" id="address" value="<?php echo e($user->address); ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="gender" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select type="text" name="gender" class="form-control" id="gender" value="<?php echo e($user->gender); ?>">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Date of Birth</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="dob" class="form-control" id="dob" value="<?php echo e($user->dob); ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="joindate" class="col-sm-3 text-right control-label col-form-label">Join date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="join_date" class="form-control" id="join_date" value="<?php echo e($user->join_date); ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="job type" class="col-sm-3 text-right control-label col-form-label">Job type</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="job_type" class="form-control" id="job_type" value="<?php echo e($user->job_type); ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="city" class="col-sm-3 text-right control-label col-form-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="city" class="form-control" id="city" value="<?php echo e($user->city); ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="age" class="col-sm-3 text-right control-label col-form-label">Age</label>
                                    <div class="col-sm-9">
                                        <input type="number" name="age" class="form-control" id="lname" value="<?php echo e($user->age); ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="age" class="col-sm-3 text-right control-label col-form-label">Connectivity:</label>
                                    <div class="col-sm-9">
                                        <input type="checkbox" class="form-check-input" id="check1" name="option1" checked>Slack account <br>
                                        <input type="checkbox" class="form-check-input" id="check1" name="option1" >Trello account <br>
                                        <input type="checkbox" class="form-check-input" id="check1" name="option1" >Ipage account <br>
                                        <input type="checkbox" class="form-check-input" id="check1" name="option1" >Others
                                    </div>
                                </div>

                            </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-dark">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>