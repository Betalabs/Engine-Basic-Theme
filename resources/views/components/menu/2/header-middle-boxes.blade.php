<div class="header-middle-center">
    <a href="#" class="box-left-icon">
        <div class="box-icon rounded">
            @if(isset($store) && null !== $store->header_middle_icons_left_icon && $store->header_middle_icons_left_icon->values->isNotEmpty())
                <i class="icon icon-{{ $store->header_middle_icons_left_icon->values->first()->value }}"></i>
            @else
                <i class="icon icon-star"></i>
            @endif
        </div>
        <div class="box-text">
            <div class="title">
                @if(isset($store) && null !== $store->header_middle_icons_left_title && $store->header_middle_icons_left_title->values->isNotEmpty())
                    {!! $store->header_middle_icons_left_title->values->first()->value !!}
                @else
                    Original<br>brands
                @endif
            </div>
        </div>
    </a>
    <a href="#" class="box-left-icon">
        <div class="box-icon rounded">
            @if(isset($store) && null !== $store->header_middle_icons_middle_icon && $store->header_middle_icons_middle_icon->values->isNotEmpty())
                <i class="icon icon-{{ $store->header_middle_icons_middle_icon->values->first()->value }}"></i>
            @else
                <i class="icon icon-star"></i>
            @endif
        </div>
        <div class="box-text">
            <div class="title">
                @if(isset($store) && null !== $store->header_middle_icons_middle_title && $store->header_middle_icons_middle_title->values->isNotEmpty())
                    {!! $store->header_middle_icons_middle_title->values->first()->value !!}
                @else
                    Original<br>brands
                @endif
            </div>
        </div>
    </a>
    <a href="#" class="box-left-icon">
        <div class="box-icon rounded">
            @if(isset($store) && null !== $store->header_middle_icons_right_icon && $store->header_middle_icons_right_icon->values->isNotEmpty())
                <i class="icon icon-{{ $store->header_middle_icons_right_icon->values->first()->value }}"></i>
            @else
                <i class="icon icon-star"></i>
            @endif
        </div>
        <div class="box-text">
            <div class="title">
                @if(isset($store) && null !== $store->header_middle_icons_right_title && $store->header_middle_icons_right_title->values->isNotEmpty())
                    {!! $store->header_middle_icons_right_title->values->first()->value !!}
                @else
                    Original<br>brands
                @endif
            </div>
        </div>
    </a>
</div>