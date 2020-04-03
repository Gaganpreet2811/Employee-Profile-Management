<?php /* E:\xampp\htdocs\EMS\resources\views/admin/includes/sidebar.blade.php */ ?>
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(route('dashboard')); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
                
                <?php endif; ?>
                   <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo e(route('user')); ?>" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">User Management</span></a></li>
                
                    
                        
                        
                    
                
                <?php endif; ?>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Settings</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="<?php echo e(route('profile')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> My profile </span></a></li>
                        <li class="sidebar-item"><a href="<?php echo e(route('change.password')); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Change Password </span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>