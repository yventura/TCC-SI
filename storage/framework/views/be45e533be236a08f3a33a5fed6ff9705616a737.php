<?php $__env->startSection('content'); ?>
  <div  id="fundo" class="content" style="background-image: url('<?php echo e(asset('material')); ?>/img/logim.jpg');">
    <div class="container-fluid">
      <div class="row">
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeto1\resources\views/dashboard.blade.php ENDPATH**/ ?>