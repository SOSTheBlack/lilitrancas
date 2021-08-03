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

            $active = '';
if (! $routeIsJavaScript && request()->routeIs($submenu->url)) {
    $active = 'active';
}
            @endphp
            @can($submenu?->permission)
                <li class="{{$active}}">
                    <a href="@if($routeIsJavaScript){{$submenu->url}} @else{{route($submenu->url)}} @endif"
                       class="{{$custom_classes}} {{$active . ' '.$configData['activeMenuColor']}}"
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