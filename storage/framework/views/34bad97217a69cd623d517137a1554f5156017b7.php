

<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <div class ="text-center mt-3 mb-4">
        <a href="<?php echo e(url('nivel/create')); ?>">
            <button class="btn btn-success">Novo Nivel</button>
        </a>
    </div>
    <div class="col-lg-12 col-md-20">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Niveis Cadastrados</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($niveisAcesso)): ?>
                            <?php $__currentLoopData = $niveisAcesso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nivel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($nivel->id); ?></td>
                                <td><?php echo e($nivel->nome); ?></td>
                                <td>
                                    <a href="<?php echo e(url('nivel/'.$nivel->id.'/edit')); ?>">
                                        <button class="btn btn-sm btn-primary ">Editar</button>
                                    </a>
                                </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'nivelIndex', 'titlePage' => __('Gerenciamento Niveis de Acesso')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TCC-SI\resources\views/nivel/index.blade.php ENDPATH**/ ?>