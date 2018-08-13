@extends('layouts.app')

@section('template_title')
    {{ $serviceName }}
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col col-lg-3">
                    <div class="list-group">
                        @foreach ($zones as $zone)
                            <a href="{{ route('service.domain.id',$zone->id) }}" class="list-group-item list-group-item-action">
                                {{ $zone->name }}
                            </a>
                        @endforeach
                    </div>
            </div>
            <div class="col">
                {{--  {{ $regionInstances }}  --}}
            </div>
        </div>
    </div>
@endsection
