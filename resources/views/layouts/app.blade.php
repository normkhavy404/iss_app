@extends('layouts.base')

@section('body')
    @include('layouts.sibar')
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection

@stack('scripts')
