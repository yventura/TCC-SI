<div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo e(asset('material')); ?>/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="#" class="simple-text logo-normal"> <?php echo e(__('SOF')); ?> </a>
        <?php $permissoes = json_decode(Auth::user()->permissoes);?>

    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <?php if($permissoes[0]->criar_usuario): ?>
                <div>
                    <li class="nav-item <?php echo e(($activePage == 'user_management' || $activePage == 'usuarioNivel') ? ' active' : ''); ?>">
                        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                            <p><?php echo e(__('Controle de Usuários')); ?>

                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse <?php echo e(($activePage == 'user_management' || $activePage == 'usuarioNivel') ? 'show' : ''); ?>" id="laravelExample">
                            <ul class="nav">
                                <li class="nav-item<?php echo e($activePage == 'user_management' ? ' active' : ''); ?>">
                                    <a class="nav-link" href="<?php echo e(route('usuario.index')); ?>">
                                        <i class="material-icons">persons</i>
                                        <span class="sidebar-normal"> <?php echo e(__('Usuarios Cadastrados')); ?> </span>
                                    </a>
                                </li>
                                <li class="nav-item<?php echo e($activePage == 'usuarioNivel' ? ' active' : ''); ?>">
                                    <a class="nav-link" href="<?php echo e(route('nivel.index')); ?>">
                                        <i class="material-icons">persons</i>
                                        <span class="sidebar-normal"> <?php echo e(__('Niveis')); ?> </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </div>
            <?php endif; ?>
            <?php if($permissoes[0]->gerar_relatorio): ?>
                <div>
                    <li class="nav-item <?php echo e(($activePage == 'comercio_ambulante_Add' || $activePage == 'comerciofixoAdd' || $activePage == 'noturnoAdd' || $activePage == 'livreAdd') ? ' active' : ''); ?>">
                        <a class="nav-link" data-toggle="collapse" href="#ocorrencia" aria-expanded="true">
                            <p><?php echo e(__('Nova Ocorrencia')); ?>

                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse <?php echo e(($activePage == 'comercio_ambulante_Add' || $activePage == 'comerciofixoAdd' || $activePage == 'noturnoAdd' || $activePage == 'livreAdd') ? 'show' : ''); ?>" id="ocorrencia">
                            <ul class="nav">
                                <li class="nav-item<?php echo e($activePage == 'comerciofixoAdd' ? ' active' : ''); ?>">
                                    <a class="nav-link" href="<?php echo e(route('comerciofixo.create')); ?>">
                                        <i class="material-icons">add</i>
                                        <span class="sidebar-normal"><?php echo e(__('Comercio Fixo')); ?> </span>
                                    </a>
                                </li>
                                <li class="nav-item<?php echo e($activePage == 'comercio_ambulante_Add' ? ' active' : ''); ?>">
                                    <a class="nav-link" href="<?php echo e(route('comercio_ambulante.create')); ?>">
                                        <i class="material-icons">add</i>
                                        <span class="sidebar-normal"><?php echo e(__('Comercio Ambulante')); ?> </span>
                                    </a>
                                </li>
                                <li class="nav-item<?php echo e($activePage == 'noturnoAdd' ? ' active' : ''); ?>">
                                    <a class="nav-link" href="<?php echo e(route('noturno.create')); ?>">
                                        <i class="material-icons">add</i>
                                        <span class="sidebar-normal"><?php echo e(__('Fiscalização Noturna')); ?> </span>
                                    </a>
                                </li>
                                <li class="nav-item<?php echo e($activePage == 'livreAdd' ? ' active' : ''); ?>">
                                    <a class="nav-link" href="<?php echo e(route('feira_livre.create')); ?>">
                                        <i class="material-icons">add</i>
                                        <span class="sidebar-normal"><?php echo e(__('Feira Livre')); ?> </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </div>
            <?php endif; ?>
            <?php if($permissoes[0]->visualizar_relatorio): ?>
                <div>
                    <!-- Começo da View do Comercio Fixo-->
                    <li class="nav-item <?php echo e(($activePage == 'comerciofixoIndex' || $activePage == 'comerciofixoSemanal') ? ' active' : ''); ?>">
                        <a class="nav-link" data-toggle="collapse" href="#comerciofixo" aria-expanded="true">
                            <p><?php echo e(__('Comercio Fixo')); ?></p>
                        </a>
                        <div class="collapse <?php echo e(($activePage == 'comerciofixoIndex') ? 'show' : ''); ?>" id="comerciofixo">
                            <ul class="nav">
                                <li class="nav-item<?php echo e($activePage == 'comerciofixoIndex' ? ' active' : ''); ?>">
                                    <a class="nav-link" href="<?php echo e(route('comerciofixo.index')); ?>">
                                        <i class="material-icons">list</i>
                                        <span class="sidebar-normal"> <?php echo e(__('Relatorio - Comercio Fixo')); ?> </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Fim da View do Comercio Fixo-->
                    <!-- Começo da View do Praias-->
                    <li class="nav-item <?php echo e(($activePage == 'comercio_ambulante_Index') ? ' active' : ''); ?>">
                        <a class="nav-link" data-toggle="collapse" href="#comercio_ambulante" aria-expanded="true">
                            <p><?php echo e(__('Comercio Ambulante')); ?></p>
                        </a>

                        <div class="collapse <?php echo e(($activePage == 'comercio_ambulante_Index') ? 'show' : ''); ?>" id="comercio_ambulante">
                            <ul class="nav">
                                <li class="nav-item<?php echo e($activePage == 'comercio_ambulante_Index' ? ' active' : ''); ?>">
                                    <a class="nav-link" href="<?php echo e(route('comercio_ambulante.index')); ?>">
                                    <i class="material-icons">list</i>
                                    <span class="sidebar-normal"> <?php echo e(__('Relatorio - Comercio Ambulante')); ?> </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Fim da View do Praias-->
                    <!-- Começo da View do Fisc. Noturna-->
                    <li class="nav-item <?php echo e(($activePage == 'noturnoIndex') ? ' active' : ''); ?>">
                        <a class="nav-link" data-toggle="collapse" href="#noturno" aria-expanded="true">
                        <p><?php echo e(__('Fiscalizacao Noturna')); ?></p>
                        </a>

                        <div class="collapse <?php echo e(($activePage == 'noturnoIndex') ? 'show' : ''); ?>" id="noturno">
                            <ul class="nav">
                                <li class="nav-item<?php echo e($activePage == 'noturnoIndex' ? ' active' : ''); ?>">
                                    <a class="nav-link" href="<?php echo e(route('noturno.index')); ?>">
                                        <i class="material-icons">list</i>
                                        <span class="sidebar-normal"> <?php echo e(__('Relatorio - Fiscalização Noturna')); ?> </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Fim da View do Fisc. Noturna-->
                    <!-- Começo da View do Feira. Livre-->
                    <li class="nav-item <?php echo e(($activePage == 'livreIndex' ) ? ' active' : ''); ?>">
                        <a class="nav-link" data-toggle="collapse" href="#feira_livre" aria-expanded="true">
                            <p><?php echo e(__('Feira Livre')); ?></p>
                        </a>

                        <div class="collapse <?php echo e(($activePage == 'livreIndex') ? 'show' : ''); ?>" id="feira_livre">
                            <ul class="nav">
                                <li class="nav-item<?php echo e($activePage == 'livreIndex' ? ' active' : ''); ?>">
                                    <a class="nav-link" href="<?php echo e(route('feira_livre.index')); ?>">
                                        <i class="material-icons">list</i>
                                        <span class="sidebar-normal"> <?php echo e(__('Relatorio - Feira Livre')); ?> </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </div><!-- Fim da View do Feira Livre-->
            <?php endif; ?>
        </ul>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\projeto1\resources\views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>