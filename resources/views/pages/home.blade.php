@extends('layout.app')
@section('content')
    @component('components.nav')@endcomponent
    <main>
        @component('components.main-carousel')@endcomponent
        <!-- programs -->
        @component('components.programs')@endcomponent
        <!-- footer along with script tags -->
    </main>
    @include('includes.footer')
@stop