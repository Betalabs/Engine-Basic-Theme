<!-- Header -->
<header class="page-header variant-2 fullboxed sticky smart">
    <div class="navbar">
        <div class="container">
            <!-- Menu Toggle -->
            <div class="menu-toggle"><a href="#" class="mobilemenu-toggle"><i class="icon icon-menu"></i></a></div>
            <!-- /Menu Toggle -->
            <!-- Header Cart -->
            <div class="header-link dropdown-link header-cart variant-1">
                <a href="/checkout">
                    <i class="icon icon-cart"></i> <span class="badge">0</span>
                </a>
                <!-- minicart wrapper -->
            @include('components.menu.1.header-cart-minicart-wrapper')
            <!-- /minicart wrapper -->
            </div>
            <!-- /Header Cart -->
            <!-- Header Links -->
            <div class="header-links">
                <!-- Header Account -->
            @include('components.menu.1.header-links-account')
            <!-- /Header Account -->
            </div>
            <!-- /Header Links -->
            <!-- Header Search -->
            <div class="header-link header-search header-search">
                <div class="exp-search">
                    <form>
                        <input class="exp-search-input " placeholder="Search here ..." type="text" value="">
                        <input class="exp-search-submit" type="submit" value="">
                        <span class="exp-icon-search"><i class="icon icon-magnify"></i></span>
                        <span class="exp-search-close"><i class="icon icon-close"></i></span>
                    </form>
                </div>
            </div>
            <!-- /Header Search -->
            <!-- Logo -->
            <div class="header-logo">
                <a href="/" title="Logo"><img src="{{$logo}}" alt="Logo" /></a>
            </div>
            <!-- /Logo -->

            @desktop
            <!-- Mega Menu -->
            @include('components.menu.1.mega-menu')
            <!-- /Mega Menu -->
            @elsedesktop
            <!-- Mobile Menu -->
            @include('components.menu.1.mobile-menu')
            <!-- Mobile Menu -->
            @enddesktop
        </div>
    </div>
</header>
<!-- /Header -->
