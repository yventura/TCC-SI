<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><?php echo e($title); ?></a>
        </div>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item<?php echo e($activePage == 'login' ? ' active' : ''); ?>">
                    <a href="<?php echo e(route('login')); ?>" class="nav-link">
                        <i class="material-icons">fingerprint</i> <?php echo e(__('Login')); ?>

                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<?php /**PATH C:\xampp\htdocs\projeto1\resources\views/layouts/navbars/navs/guest.blade.php ENDPATH**/ ?>