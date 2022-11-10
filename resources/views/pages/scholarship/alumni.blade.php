@extends('layout.tender-datatable')
@section('styles')
    @push('includes.datatable-styles')
    @endpush
@stop
@section('content')
    <x-nav />
    <main>
{{--        <x-alumni-datatables />--}}

        @include('includes.alumni_datatables');

    </main>
    @include('includes.datatable-footer')

    @section('scripts')
        @push('includes.datatable-scripts')
        @endpush
    @stop
@stop
