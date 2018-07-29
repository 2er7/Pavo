<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownServiceMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Service
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownServiceMenuLink">
        <a class="dropdown-item {{ active_class(if_route('service.domain')) }}" href="{{ route('service.domain') }}">Domain</a>
    </div>
</li>

@if(if_route('service.domain.id'))
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownServiceMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Domain
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownServiceMenuLink">
            @foreach ($zones as $zone)
                <a class="dropdown-item {{ active_class(if_route('service.domain')) }}" href="{{ route('service.domain.id',$zone->id) }}">{{ $zone->name }}</a>
            @endforeach
        </div>
    </li>
@endif