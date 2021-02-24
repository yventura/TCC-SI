<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <a href="#" class="simple-text logo-normal"> {{ __('LCS') }} </a>
        <?php $permissoes = json_decode(Auth::user()->permissoes);?>

    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <div>
                <ul class="nav">
                    <div>
                        <li class="nav-item {{ ($activePage == 'user_management') ? ' active' : '' }}">
                            <a class="nav-link" data-toggle="collapse" href="#perfil" aria-expanded="true">
                                <p>{{ __('Inicio') }}
                                    <b class="caret"></b>
                                </p>
                            </a>

                            <div class="collapse {{ ($activePage == 'user_management') ? 'show' : '' }}" id="perfil">
                                <ul class="nav">
                                    <li class="nav-item{{ $activePage == 'user_management' ? ' active' : '' }}">
                                        <a class="nav-link" href="{{ route('usuario.index') }}">
                                            <i class="material-icons">persons</i>
                                            <span class="sidebar-normal"> {{ __('Meu Cadastro') }} </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
        </ul>

        <ul class="nav">
            @if ($permissoes[0]->criar_usuario)
                <div>
                    <li class="nav-item {{ ($activePage == 'user_management' || $activePage == 'usuarioNivel') ? ' active' : '' }}">
                        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                            <p>{{ __('Controle de Usuários') }}
                                <b class="caret"></b>
                            </p>
                        </a>

                        <div class="collapse {{ ($activePage == 'user_management' || $activePage == 'usuarioNivel') ? 'show' : '' }}" id="laravelExample">
                            <ul class="nav">
                                <li class="nav-item{{ $activePage == 'user_management' ? ' active' : '' }}">
                                    <a class="nav-link" href="{{ route('usuario.index') }}">
                                        <i class="material-icons">persons</i>
                                        <span class="sidebar-normal"> {{ __('Usuarios Cadastrados') }} </span>
                                    </a>
                                </li>
                                <li class="nav-item{{ $activePage == 'usuarioNivel' ? ' active' : '' }}">
                                    <a class="nav-link" href="{{ route('nivel.index') }}">
                                        <i class="material-icons">persons</i>
                                        <span class="sidebar-normal"> {{ __('Niveis') }} </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </div>
            @endif
        </ul>
        {{--        Criar filtro de acesso--}}
        <ul class="nav">
            <div>
                <li class="nav-item {{ ($activePage == 'ticket' || $activePage == 'usuarioNivel') ? ' active' : '' }}">
                    <a class="nav-link" data-toggle="collapse" href="#ticket" aria-expanded="true">
                        <p>{{ __('Ticket') }}
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse {{ ($activePage == 'ticket' || $activePage == 'usuarioNivel') ? 'show' : '' }}" id="ticket">
                        <ul class="nav">
                            <li class="nav-item{{ $activePage == 'ticket' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('ticket.index') }}">
                                    <i class="material-icons">persons</i>
                                    <span class="sidebar-normal"> {{ __('Chamados') }} </span>
                                </a>
                            </li>
                            <li class="nav-item{{ $activePage == 'usuarioNivel' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('nivel.index') }}">
                                    <i class="material-icons">persons</i>
                                    <span class="sidebar-normal"> {{ __('Consulta Chamados') }} </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </div>
        </ul>
        {{--        Criar filtro de acesso--}}
        <ul class="nav">
            <div>
                <li class="nav-item {{ ($activePage == 'user_management') ? ' active' : '' }}">
                    <a class="nav-link" data-toggle="collapse" href="#relatorio" aria-expanded="true">
                        <p>{{ __('Relatorios') }}
                            <b class="caret"></b>
                        </p>
                    </a>

                    <div class="collapse {{ ($activePage == 'user_management') ? 'show' : '' }}" id="relatorio">
                        <ul class="nav">
                            <li class="nav-item{{ $activePage == 'user_management' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('usuario.index') }}">
                                    <i class="material-icons">persons</i>
                                    <span class="sidebar-normal"> {{ __('Relatorios Gerenciais') }} </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </div>
        </ul>
    </div>
</div>
