<?php /* E:\xampp\htdocs\Emp\resources\views/admin/user/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>

    <div id="main-wrapper">

        <?php echo $__env->make('admin.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="page-wrapper">

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
                    <div class="col-md-12">
                        <div class="card">
                            <form action="<?php echo e(route('user.search')); ?>" method="GET" class="form-horizontal">
                                <div class="card-body">
                                    <h4 class="card-title">Search</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-3 text-right control-label col-form-label">Search by employee name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="search" class="form-control" id="fname" placeholder="Employee name">
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-success">Search</button>
                                        <a href="<?php echo e(route('user')); ?>" class="btn btn-md btn-danger">Clear</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Admin</h5>
                            </div>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Username</th>
                                    <th>Image</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th><?php echo e($loop->index+1); ?></th>
                                        <td><?php echo e($user->username); ?></td>
                                        <td><img src="<?php echo e(asset('uploads/gallery/' . $user->image)); ?>" width="80px" height="80px" alt="Image"> </td>
                                        <td><?php echo e($user->role); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td>
                                            <button type="button"
                                                    username="<?php echo e($user->username); ?>"
                                                    role="<?php echo e($user->role); ?>"
                                                    email="<?php echo e($user->email); ?>"
                                                    phone="<?php echo e($user->phone); ?>"
                                                    address="<?php echo e($user->address); ?>"
                                                    gender="<?php echo e($user->gender); ?>"
                                                    dob="<?php echo e($user->dob); ?>"
                                                    join_date="<?php echo e($user->join_date); ?>"
                                                    job_type="<?php echo e($user->job_type); ?>"
                                                    city="<?php echo e($user->city); ?>"
                                                    age="<?php echo e($user->age); ?>"
                                                    class="view-data btn btn-sm btn-success">View</button>
                                            <a href="<?php echo e(route('user.edit',$user->id)); ?>" class="btn btn-sm btn-dark">Edit</a>
                                            <form id="delete-form-<?php echo e($user->id); ?>" action="<?php echo e(route('user.delete',$user->id)); ?>" method="put">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="button" onclick="deletePost(<?php echo e($user->id); ?>)" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($users->links()); ?>

                        </div>
                    </div>
                </div>
            </div>

                <script>
                    $('.view-data').click(function(){
                        var username=$(this).attr('username');
                        var role=$(this).attr('role');
                        var email=$(this).attr('email');
                        var salary=$(this).attr('salary');
                        var phone=$(this).attr('phone');
                        var address=$(this).attr('address');
                        var gender=$(this).attr('gender');
                        var dob=$(this).attr('dob');
                        var join_date=$(this).attr('join_date');
                        var job_type=$(this).attr('job_type');
                        var city=$(this).attr('city');
                        var age=$(this).attr('age');
                        $('#username').text(username);
                        $('#role').text(role);
                        $('#email').text(email);
                        $('#phone').text(phone);
                        $('#address').text(address);
                        $('#gender').text(gender);
                        $('#dob').text(dob);
                        $('#join_date').text(join_date);
                        $('#job_type').text(job_type);
                        $('#city').text(city);
                        $('#age').text(age);
                        $('#show-data').modal();
                    })
                </script>

                
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.8/dist/sweetalert2.all.min.js"></script>

                <script type="text/javascript">
                    function deletePost(id)

                    {
                        const swalWithBootstrapButtons = swal.mixin({
                            confirmButtonClass: 'btn btn-success',
                            cancelButtonClass: 'btn btn-danger',
                            buttonsStyling: false,
                        })

                        swalWithBootstrapButtons({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes, delete it!',
                            cancelButtonText: 'No, cancel!',
                            reverseButtons: true
                        }).then((result) => {
                            if (result.value) {
                                event.preventDefault();
                                document.getElementById('delete-form-'+id).submit();
                            } else if (
                                // Read more about handling dismissals
                                result.dismiss === swal.DismissReason.cancel
                            ) {
                                swalWithBootstrapButtons(
                                    'Cancelled',
                                    'Your file is safe :)',
                                    'error'
                                )
                            }
                        })
                    }

                </script>
                

                <div id="show-data" class="modal fade" id="view-data" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p id="username"></p>
                                <p id="role"></p>
                                <p id="email"></p>
                                <p id="phone"></p>
                                <p id="address"></p>
                                <p id="gender"></p>
                                <p id="dob"></p>
                                <p id="join_date"></p>
                                <p id="job_type"></p>
                                <p id="city"></p>
                                <p id="age"></p>
                                <p id="phone"></p>
                            </div>
                        </div>
                    </div>
                </div>

                
                    
        </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>