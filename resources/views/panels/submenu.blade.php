<div class="collapsible-body">
    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
        @foreach ($menu as $submenu)
            @php
                $routeIsJavaScript = $submenu->url === 'javascript:void(0)';

                  $custom_classes="";
                  if(isset($submenu->class))
                  {
                  $custom_classes = $submenu->class;
                  }
            @endphp
            @can($submenu?->permission)
                <li class="{{(request()->is($routeIsJavaScript ?? route($submenu->url).'*')) ? 'active' : '' }}">
                    <a href="@if($routeIsJavaScript){{$submenu->url}} @else{{route($submenu->url)}} @endif"
                       class="{{$custom_classes}} {{(request()->is($submenu->url.'*')) ? 'active '.$configData['activeMenuColor'] : '' }}"
                    @if(!empty($configData['activeMenuColor'])) {{'style=background:none;box-shadow:none;'}} @endif
                            {{isset($submenu->newTab) ? 'target="_blank"':''}}>
                        <i class="material-icons">radio_button_unchecked</i>
                        <span>{{ __($submenu->name)}}</span>
                    </a>
                    @if (isset($submenu->submenu))
                        @include('panels.submenu', ['menu' => $submenu->submenu])
                    @endif
                </li>
            @endcan
        @endforeach
    </ul>
</div>