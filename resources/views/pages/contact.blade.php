@extends('layout.app')
@section('content')
    @component('components.nav')@endcomponent
    <main>
        
        <div class="container">
            <p>This is contact page</p>
        </div>
        
        <!-- footer along with script tags -->
        @include('includes.footer')
    </main>
@stop