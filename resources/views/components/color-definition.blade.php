@if($colors)
<style>
    :root {
        --default-color-links: #0bc39f;
        --default-color-links-in-state: #333745;
        --default-color-navbar-background: #fff;
        --default-color-navbar-background-on-hover: #fff;
        --default-color-navbar-font-color-on-hover: #191919;
        --default-color-navbar-submenu-background: #fff;
        --default-color-navbar-submenu-font-color: #191919;

        @if(null !== $colors->color_links && $colors->color_links->values->isNotEmpty())
        --color-links: {{ $colors->color_links->values->first()->value ?? '--default-color-links' }};
        @endif
        @if(null !== $colors->color_links_in_state && $colors->color_links_in_state->values->isNotEmpty())
        --color-links-in-state: {{ $colors->color_links_in_state->values->first()->value ?? '--default-color-links-in-state' }};
        @endif
        @if(null !== $colors->color_navbar_background && $colors->color_navbar_background->values->isNotEmpty())
        --color-navbar-background: {{ $colors->color_navbar_background->values->first()->value ?? '--default-color-navbar-background' }};
        @endif
        @if(null !== $colors->color_navbar_background_on_hover && $colors->color_navbar_background_on_hover->values->isNotEmpty())
        --color-navbar-background-on-hover: {{ $colors->color_navbar_background_on_hover->values->first()->value ?? '--default-color-navbar-background-on-hover' }};
        @endif
        @if(null !== $colors->navbar_font_color_on_hover && $colors->navbar_font_color_on_hover->values->isNotEmpty())
        --color-navbar-font-color-on-hover: {{ $colors->navbar_font_color_on_hover->values->first()->value ?? '--default-color-navbar-font-color-on-hover' }};
        @endif
        @if(null !== $colors->color_navbar_submenu_background && $colors->color_navbar_submenu_background->values->isNotEmpty())
        --color-navbar-submenu-background: {{ $colors->color_navbar_submenu_background->values->first()->value ?? '--default-color-navbar-submenu-background' }};
        @endif
        @if(null !== $colors->color_navbar_submenu_font_color && $colors->color_navbar_submenu_font_color->values->isNotEmpty())
        --color-navbar-submenu-font-color: {{ $colors->color_navbar_submenu_font_color->values->first()->value ?? '--default-color-navbar-submenu-font-color' }};
        @endif

}
</style>
<link href="{{ asset('assets/styles/colors/style-color-custom.css') }}" rel="stylesheet">
@endif