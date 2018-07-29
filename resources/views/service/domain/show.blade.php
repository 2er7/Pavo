@extends('layouts.app')

@section('template_title')
    {{ $zoneName }}
@endsection


@section('content')
    <div class="container">
        <div class="row">            
            <div class="col col-lg-4">
                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                    <div class="card-header">{{ trans('domain.overview') }}</div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">
 
                        </p>
                    </div>                    
                </div>
            </div>
            <div class="col col-lg-8">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Type</th>
                            <th scope="col">Name</th>
                            <th scope="col">Value</th>
                            <th scope="col">TTL</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($zoneDetails as $detail)
                            <tr>
                                <th scope="row">{{ $detail->type }}</th>
                                <td>{{ $detail->name }}</td>
                                <td>{{ $detail->content }}</td>
                                <td>{{ $detail->ttl }}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
