
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Novas tags de estrutura em HTML5</title>
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
    </head>

    <body>
        <header>
            <h4 style="text-align: center;">SECRETARIA DE FINANÇAS</h4>
            <h4 style="text-align: center;">Diretoria de Operações Especiais e Fiscalização de Taxas</h4>
            <h5 style="text-align: center;">FISCALIZAÇÃO NOTURNA</h5>
        </header>
        <table>
            <tr>
                <th>Data</th>
                <th>Paralisação de eventos esportivos</th>
                <th>Denuncias recebidas no COPOM</th>
                <th>Despacho de processos</th>
                <th>Trabalho de coibição, inibição e manutenção de comercio ambulante irregular</th>
            </tr>
            <tbody id="tableRetorno">
                <?php $__currentLoopData = $retorno; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noturno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($noturno->data); ?></td>
                        <td><?php echo e($noturno->paralisacao_evento); ?></td>
                        <td><?php echo e($noturno->comercio_ambulante); ?></td>
                        <td><?php echo e($noturno->atendimento_processos); ?></td>
                        <td><?php echo e($noturno->atendimento_denuncia); ?></td>
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



































































<?php /**PATH C:\xampp\htdocs\projeto1\resources\views/noturno/pdf_noturno.blade.php ENDPATH**/ ?>