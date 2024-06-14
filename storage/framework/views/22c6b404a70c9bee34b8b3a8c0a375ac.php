<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            <i class="fas fa-mosque"></i>
        </div>
        <div class="sidebar-brand-text mx-2">UKM IMAM</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item
    <?php if(request()->routeIs('dashboard')): ?> active <?php endif; ?>
    ">
        <a class="nav-link" href="
        <?php echo e(route('dashboard')); ?>

         ">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item
    
        ">
        <a class="nav-link" href="<?php echo e(route('blog')); ?>">
            <i class="fas fa-shield-alt"></i>
            <span>Artikel</span></a>
    </li>
    <li class="nav-item
    
    ">
        <a class="nav-link" href="
        
         ">
            <i class="fas fa-fw fa-table"></i>
            <span>Jadwal Latihan</span></a>
    </li>
    <li class="nav-item
    
    ">
        <a class="nav-link" href="
        
         ">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Alat</span></a>
    </li>

    <!-- Pembatas -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item
    
    ">
        <a class="nav-link collapsed " data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="
                
                 ">Peminjaman Alat</a>
                <a class="collapse-item" href="
                
                 ">Pengembalian Alat</a>
            </div>
        </div>
    </li>

    <!-- Pembatas -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<?php /**PATH D:\Semester_4\Laravel\UKMIMAM\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>