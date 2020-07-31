<div class="mobilemenu dblclick">
    <div class="mobilemenu-header">
        <div class="title">MENU</div>
        <a href="#" class="mobilemenu-toggle"></a>
    </div>
    <div class="mobilemenu-content">
        <ul class="nav">
            @foreach($categories as $zero)
                @include('components.menu.1.mobile-menu.item')
            @endforeach
        </ul>
    </div>
</div>
