

<?php $__env->startSection('content'); ?>
<div class="content">
    <div class="container-fluid">
        <form method="post" action="<?php echo e(route('comerciofixo.store')); ?>" class="form-horizontal">
            <div class="row">
                <div class="col-md-12">
                <?php echo csrf_field(); ?>
                <!-- Comercio Fixo - Processos Físicos e via rápida empresa redesim -->
                    <div class="card ">
                        <div class="card-header card-header-primary">
                        <h4 class="card-title"><?php echo e(__('Comercio Fixo')); ?></h4>
                        </div>

                        <div class="row">
                            <label style="color: black" class="col-sm-4 col-form-label m-3"><?php echo e(__('Data')); ?></label>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input class="form-control" name="data" id="input-data" type="date" value="<?php echo e(date('Y-m-d')); ?>" readonly/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label style="color: black" class="col-sm-4 col-form-label m-3"><?php echo e(__('Vistoria Processos')); ?></label>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <input class="form-control  text-center" name="valor_cf_01" id="input-valor_cf_01" placeholder="Qtd" required/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label style="color: black" class="col-sm-4 col-form-label m-3"><?php echo e(__('Vistoria VRE')); ?></label>
                            <div class="col-sm-1">
                                <div class="form-group">
                                    <input class="form-control  text-center" name="valor_cf_02" id="input-valor_cf_02" placeholder="Qtd" required/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <label style="color: black" class="col-sm-4 col-form-label m-3"><?php echo e(__('Viabilidade VRE')); ?></label>
                            <div class="col-sm-1">
                                <input class="form-control  text-center" name="valor_cf_03" id="input-valor_cf_03" placeholder="Qtd"/>
                            </div>
                        </div>

                        <div class="row">
                            <label style="color: black" class="col-sm-4 col-form-label m-3"><?php echo e(__('Ciencia')); ?></label>
                            <div class="col-sm-1">
                                <input class="form-control  text-center" name="valor_cf_04" id="input-valor_cf_04" placeholder="Qtd" required/>
                            </div>
                        </div>

                        <div class="row">
                            <label style="color: black" class="col-sm-4 col-form-label m-3"><?php echo e(__('Intimacao')); ?></label>
                            <div class="col-sm-1">
                                <input class="form-control  text-center" name="valor_cf_05" id="input-valor_cf_05" placeholder="Qtd" required/>
                            </div>
                        </div>

                        <div class="row">
                            <label style="color: black" class="col-sm-4 col-form-label m-3"><?php echo e(__('Plantao Interno')); ?></label>
                            <div class="col-sm-1">
                                <input class="form-control  text-center" name="valor_cf_06" id="input-valor_cf_06" placeholder="Qtd" required/>
                            </div>
                        </div>

                        <div class="row">
                            <label style="color: black" class="col-sm-4 col-form-label m-3"><?php echo e(__('Atendimento Guiche')); ?></label>
                            <div class="col-sm-1">
                                <input class="form-control  text-center" name="valor_cf_07" id="input-valor_cf_07" placeholder="Qtd" required/>
                            </div>
                        </div>

                        <div class="row">
                            <label style="color: black" class="col-sm-4 col-form-label m-3"><?php echo e(__('Triagem/Pesquisa/Despachos')); ?></label>
                            <div class="col-sm-1">
                                <input class="form-control  text-center" name="valor_cf_08" id="input-valor_cf_08" placeholder="Qtd" required/>
                            </div>
                            <div class="col-sm-2">
                                <select class="form-control" name="desc_08" id="input-desc_08" required>
                                    <option value="">Selecione</option>
                                    <option value="1">Despachos</option>
                                    <option value="2">Pesquisa</option>
                                    <option value="3">Infração</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <label style="color: black" class="col-sm-4 col-form-label m-3"><?php echo e(__('Procedimento Administrativo')); ?></label>
                            <div class="col-sm-1">
                                <input class="form-control  text-center" name="valor_cf_09" id="input-valor_cf_09" placeholder="Qtd" required/>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <select class="form-control" name="desc_09" id="desc_09" required>
                                        <option value="">Selecione</option>
                                        <option value="1">Ex - Oficio</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3 mb-4">
                            <button type="submit" class="btn btn-success "><?php echo e(__('Gerar Ocorrencia')); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'ComercioFixoAdd', 'titlePage' => __(' ')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeto1\resources\views/comerciofixo/add.blade.php ENDPATH**/ ?>