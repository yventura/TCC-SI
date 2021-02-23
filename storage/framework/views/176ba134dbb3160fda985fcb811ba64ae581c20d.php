<!DOCTYPE html>
    <html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<html>
    <head>
        <title>Comercio Ambulante</title>
    </head>

    <body>
        <header>
            <h4 style="text-align: center;">SECRETARIA DE FINANÇAS</h4>
            <h4 style="text-align: center;">Diretoria de Operações Especiais e Fiscalização de Taxas</h4>
            <h5 style="text-align: center;">COMERCIO AMBULANTE</h5>
        </header>

        <table>
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Ort. Ret. de cadeiras e Guarda-Sóis</th>
                    <th>Ort. Ret. de Animais</th>
                    <th>Ort. Ret. tendas, camping, churrasco</th>
                    <th>Ort. Som Abusivo</th>
                    <th>Ort. Paralisação Esporte</th>
                    <th>Ort. Ambulante Irregular - Praias e VC</th>
                    <th>Vist/Cient/Apreensão - Praias</th>
                    <th>Vist/Cient/Apreensão - VC</th>
                    <th>Denuncias</th>
                </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $retorno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ambulante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($ambulante->data); ?></td>
                        <td><?php echo e($ambulante->valor_ca_01); ?></td>
                        <td><?php echo e($ambulante->valor_ca_02); ?></td>
                        <td><?php echo e($ambulante->valor_ca_03); ?></td>
                        <td><?php echo e($ambulante->valor_ca_04); ?></td>
                        <td><?php echo e($ambulante->valor_ca_05); ?></td>
                        <td><?php echo e($ambulante->valor_ca_06); ?></td>
                        <td><?php echo e($ambulante->valor_ca_07); ?></td>
                        <td><?php echo e($ambulante->valor_ca_08); ?></td>
                        <td><?php echo e($ambulante->valor_ca_09); ?></td>
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

<?php /**PATH C:\xampp\htdocs\projeto1\resources\views/comercio_ambulante/pdf_ambulante.blade.php ENDPATH**/ ?>