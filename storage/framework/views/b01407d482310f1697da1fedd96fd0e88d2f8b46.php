
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Novas tags de estrutura em HTML5</title>
    </head>
    <body>
        <header>
            <h4 style="text-align: center;">SECRETARIA DE FINANÇAS</h4>
            <h4 style="text-align: center;">Diretoria de Operações Especiais e Fiscalização de Taxas</h4>
            <h5 style="text-align: center;">FEIRA LIVRE</h5>
        </header>
        <table>
            <tr>
                <th>Data</th>
                <th>Feira</th>
                <th>Informação</th>
            </tr>
            <?php $__currentLoopData = $feira_livreTotal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feira): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $feira->informacoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $local => $informacoes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($feira->data); ?></td>
                        <td><?php echo e(App\Livre::Desc01($local)); ?></td>
                        <td><?php echo e(implode('', $informacoes)); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

<?php /**PATH C:\xampp\htdocs\projeto1\resources\views/feira_livre/pdf_feiralivre.blade.php ENDPATH**/ ?>