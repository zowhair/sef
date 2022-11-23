@extends('layout.app')
@section('content')
    <x-nav :category="$category"/>
    <main>
        
        <x-main-carousel :data="$data"/>
        <!-- programs -->
        <x-programs />
        <!-- footer along with script tags -->
        <x-bottom-map />
    </main>
    @include('includes.footer')
@stop