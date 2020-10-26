<div class="megamenu fadein blackout">
    <ul class="nav">
        @foreach($categories as $zero)
            @include('components.common.mega-menu.item')
        @endforeach
    </ul>
</div>
