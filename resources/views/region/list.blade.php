<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ $region }}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        @if($region == 'Global')
            <dd class="dropdown-item">
                {{ trans('region.not_require', ['route' => $serviceName]) }}
            </dd>
            <div class="dropdown-divider"></div>
            @foreach(array_keys(config('region')) as $regions)
                <a class="dropdown-item disabled" href="">{{ trans('region.'.$regions) }}</a>
            @endforeach
        @else
            @foreach(array_keys(config('region')) as $regions)
                <a class="dropdown-item" href="{{ url('/region/'.$regions) }}">{{ trans('region.'.$regions) }}</a>
            @endforeach
        @endif
    </div>
</li>