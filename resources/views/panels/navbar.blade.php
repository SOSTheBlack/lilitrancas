<div class="navbar @if(($configData['isNavbarFixed'])=== true){{'navbar-fixed'}} @endif">
    <nav
            class="{{$configData['navbarMainClass']}} @if($configData['isNavbarDark']=== true) {{'navbar-dark'}} @elseif($configData['isNavbarDark']=== false) {{'navbar-light'}} @elseif(!empty($configData['navbarBgColor'])) {{$configData['navbarBgColor']}} @else {{$configData['navbarMainColor']}} @endif">
        <div class="nav-wrapper">
            <ul class="navbar-list right">
                <li class="dropdown-language">
                    <a class="waves-effect waves-block waves-light translation-button" href="#"
                       data-target="translation-dropdown">
                        <span class="flag-icon flag-icon-br"></span>
                    </a>
                </li>
                <li class="hide-on-med-and-down">
                    <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                        <i class="material-icons">settings_overscan</i>
                    </a>
                </li>
                <li class="hide-on-large-only search-input-wrapper">
                    <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">
                        <i class="material-icons">search</i>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);"
                       data-target="notifications-dropdown">
                        <i class="material-icons">notifications_none<small class="notification-badge">0</small></i>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);"
                       data-target="profile-dropdown">
            <span class="avatar-status avatar-online">
              <img src="{{asset($authUser->profile?->avatar ?? \App\Helpers\UiAvatars\UiAvatar::getUrl(auth()->user()->name))}}"
                   alt="avatar"><i></i>
            </span>
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a class="waves-effect waves-block waves-light sidenav-trigger" href="#"--}}
{{--                       data-target="slide-out-right">--}}
{{--                        <i class="material-icons">format_indent_increase</i>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
            <!-- translation-button-->
            <ul class="dropdown-content" id="translation-dropdown">
                <li class="dropdown-item">
                    <a class="grey-text text-darken-1" href="{{url('lang/pt_BR')}}" data-language="pt_BR">
                        <i class="flag-icon flag-icon-br"></i>
                        {{ __('Português') }}
                    </a>
                </li>
                <li class="dropdown-item">
                    <a class="grey-text text-darken-1 disabled" href="#" data-language="en">
                        <i class="flag-icon flag-icon-us"></i>
                        {{ __('English (coming soon)') }}
                    </a>
                </li>
                <li class="dropdown-item">
                    <a class="grey-text text-darken-1 disabled" href="#" data-language="es">
                        <i class="flag-icon flag-icon-es"></i>
                        {{ __('Español (listo pronto)') }}
                    </a>
                </li>
            </ul>
            <!-- notifications-dropdown-->
            <ul class="dropdown-content" id="notifications-dropdown">
                <li>
                    <h6>{{ __('Notificações') }} <span class="new badge">0</span></h6>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="black-text" href="javascript:void(0)">
                        <span class="material-icons icon-bg-circle green small">clear_all</span>
                        ...::: {{ __('Tudo certo por aqui') }} :::...
                    </a>
                </li>
            </ul>
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
                <li>
                    <a class="grey-text text-darken-1" href="{{ route('user.me') }}">
                        <i class="material-icons">person_outline</i>
                        {{ __('Perfil') }}
                    </a>
                </li>
                <li>
                    <a class="grey-text text-darken-1" href="#">
                        <i class="material-icons">help_outline</i>
                        {{ __('Ajuda') }}
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a class="grey-text text-darken-1" href="#">
                        <i class="material-icons">lock_outline</i>
                        {{ __('Bloquear') }}
                    </a>
                </li>
                <li>
                    <a class="grey-text text-darken-1" href="{{ route('logout') }}">
                        <i class="material-icons">keyboard_tab</i>
                        {{ __('Sair') }}
                    </a>
                </li>
            </ul>
        </div>
        <nav class="display-none search-sm">
            <div class="nav-wrapper">
                <form id="navbarForm">
                    <div class="input-field search-input-sm">
                        <input class="search-box-sm mb-0" type="search" required=""
                               placeholder='{{ __('Explorar ' . config('app.name')) }}' id="search"
                               data-search="template-list">
                        <label class="label-icon" for="search">
                            <i class="material-icons search-sm-icon">search</i>
                        </label>
                        <i class="material-icons search-sm-close">close</i>
                        <ul class="search-list collection search-list-sm display-none"></ul>
                    </div>
                </form>
            </div>
        </nav>
    </nav>
</div>