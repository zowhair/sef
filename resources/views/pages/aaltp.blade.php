@extends('layout.app')
@extends('layout.page-inner-section')

@section('content')
    <x-nav />
    <main>
        
        <div class="container">
            <x-main-center-section name="Mid Section" />
        </div>
        
        <!-- footer along with script tags -->
        @include('includes.footer')
    </main>
@stop