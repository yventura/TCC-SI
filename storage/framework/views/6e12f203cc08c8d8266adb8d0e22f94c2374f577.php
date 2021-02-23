

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form name="formCad" id="formCad" method="post" action="<?php echo e(route('nivel.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Novo Nivel</h4>
                            </div>

                            <div class="card-body ">
                                <div class="row">
                                    <label style="color: black" class="col-sm-2 col-form-label"><?php echo e(__('Nome')); ?></label>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input class="form-control" name="nome" id="input-name" type="text" placeholder="<?php echo e(__('Nome do Nivel')); ?>" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label style="color: black" class="col-sm-2 col-form-label"><?php echo e(__('Criar Usuario')); ?></label>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input name="criar_usuario" id="input-create_user" type="checkbox" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label style="color: black" class="col-sm-2 col-form-label"><?php echo e(__('Editar Usuario')); ?></label>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input name="editar_usuario" id="input-edit_user" type="checkbox" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label style="color: black" class="col-sm-2 col-form-label"><?php echo e(__('Gerenciar Niveis')); ?></label>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input name="gerenciar_niveis" id="input-gerenciar_user" type="checkbox" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label style="color: black" class="col-sm-2 col-form-label"><?php echo e(__('Gerar Relatorio')); ?></label>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input name="gerar_relatorio" id="input-gerar_report" type="checkbox" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label style="color: black" class="col-sm-2 col-form-label"><?php echo e(__('Visualizar Relatorio')); ?></label>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input name="visualizar_relatorio" id="input-view_report" type="checkbox" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label style="color: black" class="col-sm-2 col-form-label"><?php echo e(__('Imprimir Relatorio')); ?></label>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <input name="imprimir_relatorio" id="input-view_report" type="checkbox" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary"><?php echo e(__('Confirma')); ?></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'nivelAdd', 'titlePage' => __(' ')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TCC-SI\resources\views/nivel/add.blade.php ENDPATH**/ ?>