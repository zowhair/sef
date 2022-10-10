@extends('layout.app')
@section('content')
    @component('components.nav')@endcomponent
    <main>
        @component('components.tender-datatables')@endcomponent
    </main>
    @include('includes.footer')
@stop