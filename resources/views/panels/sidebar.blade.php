<aside
        class="{{$configData['sidenavMain']}} @if(!empty($configData['activeMenuType'])) {{$configData['activeMenuType']}} @else {{$configData['activeMenuTypeClass']}}@endif @if(($configData['isMenuDark']) === true) {{'sidenav-dark'}} @elseif(($configData['isMenuDark']) === false){{'sidenav-light'}}  @else {{$configData['sidenavMainColor']}}@endif">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="{{asset('/')}}">
                @if(!empty($configData['mainLayoutType']) && isset($configData['mainLayoutType']))
                    @if($configData['mainLayoutType']=== 'vertical-modern-menu')
                        <img class="hide-on-med-and-down" src="{{asset($configData['largeScreenLogo'])}}"
                             alt="materialize logo"/>
                        <img class="show-on-medium-and-down hide-on-med-and-up"
                             src="{{asset($configData['smallScreenLogo'])}}"
                             alt="materialize logo"/>

                    @elseif($configData['mainLayoutType']=== 'vertical-menu-nav-dark')
                        <img src="{{asset($configData['smallScreenLogo'])}}" alt="materialize logo"/>

                    @elseif($configData['mainLayoutType']=== 'vertical-gradient-menu')
                        <img class="show-on-medium-and-down hide-on-med-and-up"
                             src="{{asset($configData['largeScreenLogo'])}}"
                             alt="materialize logo"/>
                        <img class="hide-on-med-and-down" src="{{asset($configData['smallScreenLogo'])}}"
                             alt="materialize logo"/>

                    @elseif($configData['mainLayoutType']=== 'vertical-dark-menu')
                        <img class="show-on-medium-and-down hide-on-med-and-up"
                             src="{{asset($configData['largeScreenLogo'])}}"
                             alt="materialize logo"/>
                        <img class="hide-on-med-and-down" src="{{asset($configData['smallScreenLogo'])}}"
                             alt="materialize logo"/>
                    @endif
                @endif
                <span class="logo-text hide-on-med-and-down">
          @if(!empty ($configData['templateTitle']) && isset($configData['templateTitle']))
                        {{$configData['templateTitle']}}
                    @else
                        {{ config('app.name') }}
                    @endif
        </span>
            </a>
            <a class="navbar-toggler" href="javascript:void(0)"><i class="material-icons">radio_button_checked</i></a>
        </h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out"
        data-menu="menu-navigation" data-collapsible="menu-accordion">
        {{-- Foreach menu item starts --}}
        @if(!empty($menuData[0]) && isset($menuData[0]))
            @foreach ($menuData[0]->menu as $menu)
                @role($menu->permission)
                    @if(isset($menu->navheader))
                        <li class="navigation-header">
                            <a class="navigation-header-text">{{ $menu->navheader }}</a>
                            <i class="navigation-header-icon material-icons">{{$menu->icon }}</i>
                        </li>
                    @else
                        @php
                            $routeIsJavaScript = $menu->url === 'javascript:void(0)';

                            $active = '';
                            if (! $routeIsJavaScript && request()->routeIs($menu->url) || request()->is()) {
                                $active = 'active';
                            }

                              $custom_classes="";
                              if(isset($menu->class))
                              {
                              $custom_classes = $menu->class;
                              }
                        @endphp
                        <li class="bold {{$active}}">
                            <a class="{{$custom_classes}} {{ $active . ' '.$configData['activeMenuColor']}}"
                               @if(!empty($configData['activeMenuColor'])) {{'style=background:none;box-shadow:none;'}} @endif
                               href="@if($routeIsJavaScript){{$menu->url}} @else{{route($menu->url)}} @endif"
                                    {{isset($menu->newTab) ? 'target="_blank"':''}}>
                                <i class="material-icons">{{$menu->icon}}</i>
                                <span class="menu-title">{{ __($menu->name)}}</span>
                                @if(isset($menu->tag))
                                    <span class="{{$menu->tagcustom}}">{{$menu->tag}}</span>
                                @endif
                            </a>
                            @if(isset($menu->submenu))
                                @include('panels.submenu', ['menu' => $menu->submenu])
                            @endif
                        </li>
                    @endif
                @endrole
            @endforeach
        @endif
    </ul>
    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
       href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>