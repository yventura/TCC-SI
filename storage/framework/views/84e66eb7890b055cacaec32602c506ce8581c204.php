
<!DOCTYPE html>
    <html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<html>

    <head>
        <title>Comercio Fixo</title>
    </head>

    <body>

        <header>
            <h4 style="text-align: center;">SECRETARIA DE FINANÇAS</h4>
            <h4 style="text-align: center;">Diretoria de Operações Especiais e Fiscalização de Taxas</h4>
            <h5 style="text-align: center;">COMERCIO FIXO</h5>
        </header>

        <table>
            <tr>
                <th>Data</th>
                <th>Vistorias Processos</th>
                <th>Vistorias VRE</th>
                <th>Viabilidade VRE</th>
                <th>Ciências</th>
                <th>Informação</th>
                <th>Plantão Interno</th>
                <th>Atendimento Guiche</th>
                <th>Triagem/Pesquisas/Despacho</th>
                <th>Administrativo</th>
            </tr>

            <tbody>
            <?php $__currentLoopData = $retorno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fixo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($fixo->data); ?></td>
                    <td><?php echo e($fixo->valor_cf_01); ?></td>
                    <td><?php echo e($fixo->valor_cf_02); ?></td>
                    <td><?php echo e($fixo->valor_cf_03); ?></td>
                    <td><?php echo e($fixo->valor_cf_04); ?></td>
                    <td><?php echo e($fixo->valor_cf_05); ?></td>
                    <td><?php echo e($fixo->valor_cf_06); ?></td>
                    <td><?php echo e($fixo->valor_cf_07); ?></td>
                    <td><?php echo e($fixo->valor_cf_08); ?></td>
                    <td><?php echo e($fixo->valor_cf_09); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>

        </table>
    <br>
        <footer>
            <p style="text-align: left">Assinatura _________________________</p>
            <p style="text-align: left">Data __/__/____</p>
        </footer>
    </body>
</html>

    <style>
        table {
            border-collapse: collapse;
            border: 1px solid black;
        }

        th,td {
            border: 1px solid black;
        }
        table {
            table-layout: auto;
            width: 100%;
        }
    </style>

<?php /**PATH C:\xampp\htdocs\projeto1\resources\views/comerciofixo/pdf_comerciofixo.blade.php ENDPATH**/ ?>