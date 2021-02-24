<?php $__env->startSection('content'); ?>

    <div class="col-lg-12" style="margin-top: 60px">
        <div class="card">
            <div class="card-header">
                <button class="btn btn-primary">Criados</button>
                <button class="btn btn-primary">Meus</button>
                <button class="btn btn-primary">Do Grupo</button>
                <button class="btn btn-primary">Todos</button>
            </div>
            <div class="card-body table-responsive">
                <table class="table  table-hover">
                    <head class="text-dark">
                        <th>Id</th>
                        <th>Tipo</th>
                        <th>Proprietário</th>
                        <th>Assunto</th>
                        <th>Grupo</th>
                        <th>Status</th>
                        <th>Abertura</th>
                        <th> </th>
                    </head>
                    <body>
                    <tr>
                        <td>1</td>
                        <td>Suporte</td>
                        <td>Yuri Ventura Pereira Ruiz</td>
                        <td>Manutenção de computador</td>
                        <td>N/D</td>
                        <td>Aberto</td>
                        <td>23/01/2021, 9:30</td>
                        <td>
                            <a  href="<?php echo e(url('usuario/create')); ?>">
                                <img src="material\img\1_img.png">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Suporte Avançado</td>
                        <td>
                            <button class="btn btn-gray">Assumir</button>
                        </td>
                        <td>Queda de Rede</td>
                        <td>N/D</td>
                        <td>Aberto</td>
                        <td>25/01/2021, 10:00</td>
                        <td>
                            <a  href="<?php echo e(url('usuario/create')); ?>">
                                <img src="material\img\1_img.png">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Sistema</td>
                        <td>
                            <button class="btn btn-gray">Assumir</button>
                        </td>
                        <td>Sistema</td>
                        <td>Desenvolvimento</td>
                        <td>Aberto</td>
                        <td>27/01/2021, 15:20</td>
                        <td>
                            <a  href="<?php echo e(url('usuario/create')); ?>">
                                <img src="material\img\1_img.png">
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Sistema</td>
                        <td>Yuri Ventura Pereira Ruiz</td>
                        <td>Sistema</td>
                        <td>Desenvolvimento</td>
                        <td>Fechado</td>
                        <td>01/02/2021, 15:00</td>
                        <td>
                            <a  href="<?php echo e(url('usuario/create')); ?>">
                                <img src="material\img\1_img.png">
                            </a>
                        </td>
                    </tr>
                    </body>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'ticket', 'titlePage' => __(' ')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TCC-SI\resources\views/ticket/index.blade.php ENDPATH**/ ?>