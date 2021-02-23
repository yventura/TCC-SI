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
                <li class="nav-item <?php echo e(($activePage == 'meu_cadastro') ? ' active' : ''); ?>">
                    <a class="nav-link" data-toggle="collapse" href="#perfil" aria-expanded="true">
                        <p><?php echo e(__('Inicio')); ?>

                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse <?php echo e(($activePage == 'meu_cadastro') ? 'show' : ''); ?>" id="perfil">
                        <ul class="nav">
                            <li class="nav-item<?php echo e($activePage == 'meu_cadastro' ? ' active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('usuario.index')); ?>">
                                    <i class="material-icons">persons</i>
                                    <span class="sidebar-normal"> <?php echo e(__('Meu Cadastro')); ?> </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </div>

            <?php if($permissoes[0]->criar_usuario): ?>
                <div>
                    <li class="nav-item <?php echo e(($activePage == 'user_management' || $activePage == 'usuarioNivel') ? ' active' : ''); ?>">
                        <a class="nav-link" data-toggle="collapse" href="#control_user" aria-expanded="true">
                            <p><?php echo e(__('Controle de Usuários')); ?>

                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse <?php echo e(($activePage == 'user_management' || $activePage == 'usuarioNivel') ? 'show' : ''); ?>" id="control_user">
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
            <div>
                <li class="nav-item <?php echo e(($activePage == 'ticket' || $activePage == 'ticket_search' || $activePage == 'ticket_relatorios') ? ' active' : ''); ?>">
                    <a class="nav-link" data-toggle="collapse" href="#lcsdesk" aria-expanded="true">
                        <p><?php echo e(__('LcsDesk')); ?>

                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse <?php echo e(($activePage == 'ticket' || $activePage == 'ticket_search' || $activePage == 'ticket_relatorios') ? 'show' : ''); ?>" id="lcsdesk">
                        <ul class="nav">
                            <li class="nav-item<?php echo e($activePage == 'ticket' ? ' active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('ticket.index')); ?>">
                                    <i class="material-icons">persons</i>
                                    <span class="sidebar-normal"> <?php echo e(__('Chamados')); ?> </span>
                                </a>
                            </li>
                            <li class="nav-item<?php echo e($activePage == 'ticket_search' ? ' active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('ticket_search.index')); ?>">
                                    <i class="material-icons">persons</i>
                                    <span class="sidebar-normal"> <?php echo e(__('Consulta Chamado')); ?> </span>
                                </a>
                            </li>
                            <li class="nav-item<?php echo e($activePage == 'ticket_relatorios' ? ' active' : ''); ?>">
                                <a class="nav-link" href="<?php echo e(route('ticket_relatorios.index')); ?>">
                                    <i class="material-icons">persons</i>
                                    <span class="sidebar-normal"> <?php echo e(__('Relatorios')); ?> </span>
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