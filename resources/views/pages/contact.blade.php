@extends('layout.app')

@section('content')
    <x-nav />
    <main>
        <div class="container">
            <x-main-center-section name="Contact Page" />
        </div>
        <!-- footer along with script tags -->
        @include('includes.footer')
    </main>
@stop