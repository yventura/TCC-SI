<?php $__env->startSection('content'); ?>
<br>
<br>

<div class ="text-center mt-3 mb-4">
    <a href="<?php echo e(url('usuario/create')); ?>">
        <button class="btn btn-success">Novo Usuario</button>
    </a>
</div>
<div class="col-lg-12 col-md-20">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Usuarios Cadastrados</h4>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover">
                <thead class="text-warning">
                    <th>Nome<th>
                    <th>E-mail<th>
                    <th>Prontuario<th>
                    <th>Nivel<th>
                    <th>Status<th>
                    <th class="text-center">Editar<th>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuarios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td scope="row"><?php echo e($usuarios->name); ?><td>
                            <td scope="row"><?php echo e($usuarios->email); ?><td>
                            <td scope="row"><?php echo e($usuarios->prontuario); ?><td>
                            <td scope="row"><?php echo e($usuarios->nomeNivel($usuarios->nivel)); ?><td>
                            <td scope="row"><?php echo e($usuarios->nomeStatus($usuarios->status)); ?><td>
                            <td class="td-actions text-center">
                                <a href="<?php echo e(url("usuario/$usuarios->id/edit")); ?>">
                                    <button class="btn btn-primary ">Editar</button>
                                </a>
                            <td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'usuario', 'titlePage' => __(' ')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeto1\resources\views/usuario/index.blade.php ENDPATH**/ ?>