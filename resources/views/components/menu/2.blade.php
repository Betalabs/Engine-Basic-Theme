@push('componentsScripts')
    <script src="{{ asset('assets/scripts/components/menu.js') }}"></script>
@endpush

<!-- Header -->
<header class="page-header fullboxed variant-4 sticky always">
    <div class="navbar">
        @include('components.menu.2.header-top-row')
        <div class="container">
            <!-- Menu Toggle -->
            <div class="menu-toggle">
                <a href="#" class="mobilemenu-toggle"><i class="icon icon-menu"></i></a>
            </div>
            <!-- /Menu Toggle -->
            <!-- Header Middle Row -->
            <div class="header-middle-row">
                <div class="header-middle-left">
                    <!-- Logo -->
                    <div class="header-logo">
                        <a href="/" title="Logo"><img src="{{$logo}}" alt /></a>
                    </div>
                    <!-- /Logo -->
                </div>
                @include('components.menu.2.header-middle-boxes')
                <div class="header-middle-right">
                    <!-- Header Cart -->
                    <div class="header-link dropdown-link header-cart variant-1">
                        <a href="/checkout">
                            <i class="icon icon-cart"></i> <span class="badge">0</span>
                        </a>

                        <!-- minicart wrapper -->
                        @include('components.common.minicart-wrapper')
                        <!-- /minicart wrapper -->
                    </div>
                    <!-- /Header Cart -->

                    <div class="header-links">
                        <!-- Header Account -->
                        @include('components.common.account')
                        <!-- /Header Account -->
                    </div>
                </div>
            </div>
            <!-- /Header Middle Row -->
            <!-- Header Search -->
            @include('components.menu.2.header-search')
            <!-- /Header Search -->
        </div>
        <div class="menu-wrapper">
            <div class="container">
                <!-- Mobile Menu -->
                @mobile
                @include('components.common.mobile-menu', ['categories' => $categories->collection])
                @endmobile
                <!-- Mobile Menu -->

                <!-- Mega Menu -->
                @desktop
                @include('components.common.mega-menu', ['categories' => $categories->collection])
                @enddesktop
                <!-- /Mega Menu -->
            </div>
        </div>
    </div>
</header>
<!-- /Header -->