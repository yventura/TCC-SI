<?php $__env->startSection('content'); ?>
    <br>
    <br>
    <div>
        <div class="col-lg-12 col-md-20">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Feira Livre</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text">
                            <tr>
                                <th>Data</th>
                                <th>Localidade</th>
                                <th>Informação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($feira_livre)): ?>
                                <?php $__currentLoopData = $feira_livre; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feira): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(date('d/m/Y', strtotime($feira->data))); ?></td>
                                        <td><?php echo e($feira->Desc01($feira->valor_fl_01)); ?></td>
                                        <td><?php echo e($feira->valor_fl_02); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                    <?php echo e($feira_livre->links()); ?>

                </div>
            </div>
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Gera Relatorio</h4>
                </div>
                <div class="card-body table-responsive">
                    <?php if($errors->any()): ?>
                        <h4 style="color: red;">Erro: <?php echo e($errors->first()); ?></h4>
                    <?php endif; ?>
                    <form action="<?php echo e(route('livre.createPDF')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                        <div class="row">
                            <label class="col-sm-2 col-form-label"><?php echo e(__('Data Inicio:')); ?></label>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input class="form-control" name="data1" id="input-data-inicial" type="date" required />
                                </div>
                            </div>

                            <label class="col-sm-2 col-form-label"><?php echo e(__('Data Fim:')); ?></label>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input class="form-control" name="data2" id="input-data-final" type="date" required />
                                </div>
                            </div>



                            <button type="submit" id="imprimirRelatorio" class="btn btn-warning">Imprimir</button>
                        </div>
                    </form>






















                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $("#gerarRelatorio").click(function() {
            let data_inicial = document.getElementById('input-data-inicial').value;
            let data_final = document.getElementById('input-data-final').value;
            let error = 0;

            if (data_inicial == "" || data_final == "") {
                alert("Data inicial ou final não selecionada!");
                error++;
            }

            if (data_final < data_inicial) {
                alert("Data Final deve ser maior que a data inicial");
                error++;
            }

            if (!error) {
                $.ajax({
                    type:'POST',
                    header: {
                        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                    },
                    url:"<?php echo e(route('api.livre')); ?>",
                    dataType: 'JSON',
                    data: {
                        _token: "<?php echo e(csrf_token()); ?>",
                        inicio: data_inicial,
                        fim: data_final
                    },
                    success: function(data) {
                        if (data.length > 0) {
                            console.log(data);
                            adicionaRow(data);
                        }
                    },
                    error: function(data) {
                        console.log(data);
                        //alert("Erro");
                    }
                })
            }
        });

        function adicionaRow(data) {
            $(".semResultado").remove();
            $(".resultado").remove();

            for (let k in data) {
                var newRow = $('<tr class="resultado">');
                var cols = '';

                cols += '<td>' + data[k].data + '</td>';
                cols += '<td>' + data[k].valor_fl_01 + '</td>';
                cols += '<td>' + data[k].valor_fl_02 + '</td>';

                newRow.append(cols);
                $("#tableRetorno").append(newRow);
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['activePage' => 'livreIndex', 'titlePage' => __(' ')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeto1\resources\views/feira_livre/index.blade.php ENDPATH**/ ?>