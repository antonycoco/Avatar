@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                {{--<div class="card-body">@lang('Bienvenue, ') {{ Auth::user()->name }}--}}
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                           @lang("{{ session('status') }} ")
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection