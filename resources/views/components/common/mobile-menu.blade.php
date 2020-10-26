<div class="mobilemenu dblclick">
    <div class="mobilemenu-header">
        <div class="title">MENU</div>
        <a href="#" class="mobilemenu-toggle"></a>
    </div>
    <div class="mobilemenu-content">
        <ul class="nav">
            @foreach($categories as $zero)
                @include('components.common.mobile-menu.item')
            @endforeach
        </ul>
    </div>
</div>
