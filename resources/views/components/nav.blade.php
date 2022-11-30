<header class="header">
    {{-- header top announcement content --}}
        @include('components.top-bar-nav')

        {{-- mid top logos --}}
        @include('components.mid-nav')
        {{-- navigation bar --}}
    <nav>
        <x-navbar  :cat="$cat ?? ''"  :publication="$publication ?? ''" :cat_count="$cat_count ?? ''" :pub_count="$pub_count ?? ''"/>
    </nav>
</header>