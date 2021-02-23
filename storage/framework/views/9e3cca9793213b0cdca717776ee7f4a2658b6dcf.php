<?php $__env->startSection('content'); ?>
    <br>
<div class="col-lg-12">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('ticket_helpdesk/list_request')); ?>">Criados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('ticket')); ?>">Meus</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('ticket_helpdesk/list_group')); ?>">Do Grupo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('ticket_helpdesk/list_all')); ?>">Todos</a>
                </li>
            </ul>
        </div>



        <div class="card-body embed-responsive-item" style="display: inline" >
            <div class="card-header" >
                <h2>LCS - Chamados</h2>


                <div class="dropdown" >
                    <div style="display: inline">
                        <a href="<?php echo e(url('ticket/create')); ?>" style="display: inline">
                            <button style="display: inline" class="btn btn-success">Novo Chamado</button>
                        </a>
                    </div>
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="display: inline-block">Filtro +</button>
                    <ul class="dropdown-menu">
                        <label class="m-1">Filtros Disponiveis</label>
                        <div class="m-5">
                            <label class="col-sm-4 col-form-label" style="text-align: center; display: inline">ID</label>
                            <div class="col-sm-6" >
                                <div class="form-group">
                                    <input name="name" id="input-name" type="text" style="text-align: center;" aria-required="true"/>
                                </div>
                            </div>
                        </div>
                        <div class="m-5">
                            <label class="col-sm-4 col-form-label" style="text-align: center; display: inline">Tipo</label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select>
                                        <option>Exemplo a</option>
                                        <option>Exemplo b</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="m-5">
                            <label class="col-sm-4 col-form-label" style="text-align: center; display: inline">Assunto</label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="name" id="input-name" type="text" style="text-align: center; " aria-required="true"/>
                                </div>
                            </div>
                        </div>
                        <div class="m-5">
                            <label class="col-sm-4 col-form-label" style="text-align: center; display: inline">Grupo</label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="name" id="input-name" type="text" style="text-align: center; " aria-required="true"/>
                                </div>
                            </div>
                        </div>
                        <div class="m-5">
                            <label class="col-sm-4 col-form-label" style="text-align: center; display: inline">Status</label>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select>
                                        <option>Aberto</option>
                                        <option>Fechado</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>


            <div class="card-body table-responsive">
                <div class="card-body">
                    <div class="card-body">
                        <table class="table">
                            <head class="text-dark">
                                <th>N<th>
                                <th>Tipo<th>
                                <th>Proprietario<th>
                                <th>Assunto<th>
                                <th>Grupo<th>
                                <th>Status<th>
                                <th>Abertura<th>
                                <th>Solução<th>
                                <th></th>
                            </head>
                            <tbody>
                                <td>1</td>
                                <td>Suporte</td>
                                <td style="font-size: small">Yuri Ventura Pereira Ruiz</td>
                                <td>Manutenção de Computador</td>
                                <td>N/D</td>
                                <td>Aberto</td>
                                <td>22/02/2021</td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'ticket', 'titlePage' => __(' ')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TCC-SI\resources\views/ticket/index.blade.php ENDPATH**/ ?>