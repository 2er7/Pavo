@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <p class="text-center mb-3">
                            Login with
                        </p>

                        <div class="row">
                            <div class="col-sm-12 mb-2">
                                {!! HTML::icon_link(route('social.redirect',['provider' => 'github']), 'fa fa-github', 'GitHub', array('class' => 'btn btn-block btn-social btn-github')) !!}
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
