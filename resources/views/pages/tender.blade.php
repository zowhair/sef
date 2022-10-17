@extends('layout.tender-datatable')
@section('styles')
    @push('includes.datatable-styles')
    @endpush
@stop
@section('content')
    @component('components.nav')@endcomponent
    <main>
        @component('components.tender-datatables')@endcomponent
    </main>
    @include('includes.datatable-footer')
    
    @section('scripts')
        @push('includes.datatable-scripts')
        @endpush
    @stop
@stop