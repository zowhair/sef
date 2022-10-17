<!DOCTYPE html>
<html>
    <head>
    @include('includes.datatable-styles')
    </head>
    <body>
        @yield('content')
        
        @include('includes.datatable-footer')
        @include('includes.datatable-scripts')
    </body>
</html>