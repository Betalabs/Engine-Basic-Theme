(function(context) {

    var fnBuildLoggedHeader = function (data) {
        var fnIsLoggedInClientDefined = function (data) {
            return data.client != undefined
                && data.client != null
                && data.client.id != undefined
                && data.client.id != null;
        }
        var isLoggedIn = fnIsLoggedInClientDefined(data);

        if (isLoggedIn) {
            document
                .querySelectorAll('.logged-in')
                .forEach($element => $element.classList.remove('hide'))
        } else {
            document
                .querySelectorAll('.not-logged-in')
                .forEach($element => $element.classList.add('hide'))
        }
    };
    var fnBuildMiniCartItem = function (item) {
        var $model = document.querySelector('.minicart-items .model');
        var $miniCartItems = document.querySelectorAll('.minicart-items');
        var $newItem = $model.cloneNode(true);

        $miniCartItems.appendChild($newItem);
        $newItem.querySelector('.product-item-name a').setAttribute('src', item.item.urls[0].url);
        $newItem.querySelector('.product-item-name a').innerHTML = item.item.name;
        $newItem.querySelector('.product-item-qty .cart-item-qty').value = item.quantity;
        $newItem.querySelector('.product-item-pricing .minicart-price .price').innerHTML = item.price;
    }
    var fnBuildMiniCart = function (data) {
        var cart = data.cart || {};
        var items = cart.items || [];

        items.forEach(item => fnBuildMiniCartItem(item));
    }
    var fnBuildCartResume = function (data) {
        var $qty = document.querySelector('.header-link.header-cart');
        $qty.querySelector('a .badge').innerHTML=data.cart.count;

        var $totalPrice = document.querySelector('.subtotal .price-container');
        $totalPrice.querySelector('.price-wrapper .price').innerHTML='R$ '+data.cart.total;
    }

    CanopusEventCenter.addListener('ServerDataLoader.Load', fnBuildLoggedHeader);
    CanopusEventCenter.addListener('ServerDataLoader.Load', fnBuildMiniCart);
    CanopusEventCenter.addListener('ServerDataLoader.Load', fnBuildCartResume);

})(window);