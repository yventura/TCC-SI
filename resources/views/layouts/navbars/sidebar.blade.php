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
    </div>
</div>
