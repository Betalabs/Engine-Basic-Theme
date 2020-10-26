<!-- Header Top Row -->
<div class="header-top-row">
    <div class="container">
        @if(isset($store))
        <div class="header-top-left">
            <div class="header-custom-text">
                @if(null !== $store->header_telephone_1 && $store->header_telephone_1->values->isNotEmpty())
                    <span>
                        <i class="icon icon-phone"></i> {{ $store->header_telephone_1->values->first()->value }}
                    </span>
                @endif
                @if(null !== $store->header_telephone_2 && $store->header_telephone_2->values->isNotEmpty())
                    <span>
                        <i class="icon icon-phone"></i> {{ $store->header_telephone_2->values->first()->value }}
                    </span>
                @endif
                @if(null !== $store->header_telephone_3 && $store->header_telephone_3->values->isNotEmpty())
                    <span>
                        <i class="icon icon-phone"></i> {{ $store->header_telephone_3->values->first()->value }}
                    </span>
                @endif
            </div>
        </div>
        <div class="header-top-right">
            <div class="header-custom-text">
                @if(null !== $store->header_address && $store->header_address->values->isNotEmpty())
                    <span>
                        <i class="icon icon-location"></i> {{ $store->header_address->values->first()->value }}
                    </span>
                @endif
            </div>
        </div>
        @endif
    </div>
</div>
<!-- /Header Top Row -->