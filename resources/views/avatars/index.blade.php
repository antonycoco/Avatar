@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang('Valider les images des profils')
        @endslot

      {{--  <form method="POST" action="{{ route('validate.update') }}">
            {{ csrf_field() }}

            @include('partials.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                ])

            @component('components.button')
                @lang('Valider')
            @endcomponent

        </form>--}}

    @endcomponent

@endsection
