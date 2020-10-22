<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
        <title>{{ $title ??'Betalabs Basic Theme for Engine' }}</title>

        <!-- Vendor -->
        <link href="{{ asset('assets/styles/vendor/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/styles/vendor/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/styles/vendor/swiper/swiper.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/styles/vendor/magnificpopup/dist/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/styles/vendor/nouislider/nouislider.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/styles/vendor/darktooltip/dist/darktooltip.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/styles/animate.css') }}" rel="stylesheet">

        <!-- Custom -->
        <link href="{{ asset('assets/styles/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/styles/megamenu.css') }}" rel="stylesheet">

        <!-- Color Schemes -->
        @include('components.color-definition')
        {{--<link href="{{ asset('assets/styles/colors/style-color-blue.css') }}" rel="stylesheet">--}}
        {{--<link href="{{ asset('assets/styles/colors/style-color-caribbean.css') }}" rel="stylesheet">--}}
        {{--<link href="{{ asset('assets/styles/colors/style-color-green.css') }}" rel="stylesheet">--}}
        {{--<link href="{{ asset('assets/styles/colors/style-color-lightblue.css') }}" rel="stylesheet">--}}
        {{--<link href="{{ asset('assets/styles/colors/style-color-lightgreen.css') }}" rel="stylesheet">--}}
        {{--<link href="{{ asset('assets/styles/colors/style-color-orange.css') }}" rel="stylesheet">--}}
        {{--<link href="{{ asset('assets/styles/colors/style-color-pink.css') }}" rel="stylesheet">--}}
        {{--<link href="{{ asset('assets/styles/colors/style-color-tomato.css') }}" rel="stylesheet">--}}
        {{--<link href="{{ asset('assets/styles/colors/style-color-violet.css') }}" rel="stylesheet">--}}

        <!-- Icon Font -->
        <link href="{{ asset('assets/styles/fonts/icomoon-reg/style.css') }}" rel="stylesheet">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        @stack('componentsStyles')

    </head>

{{--    <body class="boxed {{ isset($colors) ? 'color-custom' : '' }}">--}}
    <body class="boxed color-custom">

        @yield('content')

        <!-- jQuery Scripts  -->
        <script src="{{ asset('assets/scripts/vendor/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/bootstrap/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/swiper/swiper.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/slick/slick.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/parallax/parallax.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/magnificpopup/dist/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/countdown/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/nouislider/nouislider.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/ez-plus/jquery.ez-plus.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/tocca/tocca.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/bootstrap-tabcollapse/bootstrap-tabcollapse.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/scrollLock/jquery-scrollLock.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/darktooltip/dist/jquery.darktooltip.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/vendor/instafeed/instafeed.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/megamenu.min.js') }}"></script>
        <script src="{{ asset('assets/scripts/app.js') }}"></script>

        <script src="https://io.betalabs.net/build/js/canopus/canopus-47676607bf.js"></script>
        @stack('componentsScripts')

    </body>

</html>