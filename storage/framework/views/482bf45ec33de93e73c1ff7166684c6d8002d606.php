<div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo e(asset('material')); ?>/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="#" class="simple-text logo-normal"> <?php echo e(__('LCS')); ?> </a>
        <?php $permissoes = json_decode(Auth::user()->permissoes);?>

    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <div>
                <li class="nav-item <?php echo e(($activePage == 'ticket' || $activePage == 'usuarioNivel') ? ' active' : ''); ?>">
                    <a class="nav-link" data-toggle="collapse" href="#meu_perfil" aria-expanded="true">
                        <p><?php echo e(__('Inicio')); ?>

                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse <?php echo e(($activePage == 'ticket' || $activePage == 'usuarioNivel') ? 'show' : ''); ?>" id="meu_perfil">
                        <ul class="nav">
                            <li class="nav-item<?php echo e($activePage == 'ticket' ? ' active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('ticket.index')); ?>">
                                    <i class="material-icons">persons</i>
                                    <span class="sidebar-normal"> <?php echo e(__('Meu Perfil ')); ?> </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </div>
        </ul>

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
        </ul>
        
        <ul class="nav">
            <div>
                <li class="nav-item <?php echo e(($activePage == 'ticket' || $activePage == 'usuarioNivel') ? ' active' : ''); ?>">
                    <a class="nav-link" data-toggle="collapse" href="#ticket" aria-expanded="true">
                        <p><?php echo e(__('Ticket')); ?>

                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse <?php echo e(($activePage == 'ticket' || $activePage == 'usuarioNivel') ? 'show' : ''); ?>" id="ticket">
                        <ul class="nav">
                            <li class="nav-item<?php echo e($activePage == 'ticket' ? ' active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('ticket.index')); ?>">
                                    <i class="material-icons">persons</i>
                                    <span class="sidebar-normal"> <?php echo e(__('Chamados')); ?> </span>
                                </a>
                            </li>
                            <li class="nav-item<?php echo e($activePage == 'usuarioNivel' ? ' active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('nivel.index')); ?>">
                                    <i class="material-icons">persons</i>
                                    <span class="sidebar-normal"> <?php echo e(__('Consulta Chamados')); ?> </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </div>
        </ul>
        
        <ul class="nav">
            <div>
                <li class="nav-item <?php echo e(($activePage == 'user_management') ? ' active' : ''); ?>">
                    <a class="nav-link" data-toggle="collapse" href="#relatorio" aria-expanded="true">
                        <p><?php echo e(__('Relatorios')); ?>

                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse <?php echo e(($activePage == 'user_management') ? 'show' : ''); ?>" id="relatorio">
                        <ul class="nav">
                            <li class="nav-item<?php echo e($activePage == 'user_management' ? ' active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('usuario.index')); ?>">
                                    <i class="material-icons">persons</i>
                                    <span class="sidebar-normal"> <?php echo e(__('Relatorios Gerenciais')); ?> </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </div>
        </ul>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\TCC-SI\resources\views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>