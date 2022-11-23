<header class="header">
    <!-- header top announcement content -->
        @include('components.top-bar-nav')

        <!-- mid top logos -->
        @include('components.mid-nav')
        <!-- navigation bar -->
    <nav>
        @include('components.navbar',['category'=>$cat]) 
    </nav>
</header>