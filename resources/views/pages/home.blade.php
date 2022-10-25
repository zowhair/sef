@extends('layout.app')
@section('content')
    <x-nav />
    <main>
        <x-main-carousel />
        <!-- programs -->
        <x-programs />
        <!-- footer along with script tags -->
        <x-bottom-map />
    </main>
    @include('includes.footer')
@stop