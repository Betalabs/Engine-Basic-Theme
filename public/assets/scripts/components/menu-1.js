(function(context) {

    var fnBuildLoggedInClientDetailsHeader = function (data) {
        var fnIsLoggedInClientDefined = function (data) {
            return data.client !== null
                && data.client.id !== null;
        }

        if (fnIsLoggedInClientDefined(data)) {
            document
                .querySelectorAll('.not-logged-in')
                .forEach($element => $element.classList.add('hide'))
            document
                .querySelectorAll('.logged-in')
                .forEach($element => $element.classList.remove('hide'))
        } else {
            document
                .querySelectorAll('.not-logged-in')
                .forEach($element => $element.classList.remove('hide'))
            document
                .querySelectorAll('.logged-in')
                .forEach($element => $element.classList.add('hide'))
        }
    }
    var fnDeleteCartItem = function ($event) {
        var $target = $event.target;
        var type = $target.getAttribute('data-type');
        var id = $target.getAttribute('data-id');
        var redirectTo = window.location.pathname;

        window.location=`/checkout/cart/${type}/remove/${id}?redirect_to=`+redirectTo;
    }
    var fnBuildMiniCartItem = function (item) {
        var $model = document.querySelector('.minicart-items .model');
        var $miniCartItems = document.querySelector('.minicart-items');
        var $newItem = $model.cloneNode(true);

        $miniCartItems.appendChild($newItem);

        $newItem.querySelector('a.product-item-photo').setAttribute('href', item.urls[0].url);
        $newItem.querySelector('a.product-item-photo').setAttribute('title', item.name);

        $newItem.querySelector('img.product-image-photo').setAttribute('src', item.image);
        $newItem.querySelector('img.product-image-photo').setAttribute('alt', item.name);

        $newItem.querySelector('.product-item-name a').setAttribute('href', item.urls[0].url);
        $newItem.querySelector('.product-item-name a').setAttribute('title', item.name);
        $newItem.querySelector('.product-item-name a').innerHTML = item.name;

        $newItem.querySelector('.product-item-qty .cart-item-qty').value = item.quantity;
        $newItem.querySelector('.product-item-pricing .minicart-price .price').innerHTML = VMasker.toMoney(item.price);

        $newItem.querySelector('.product.actions .action.delete').addEventListener('click', fnDeleteCartItem);
        $newItem.querySelector('.product.actions .action.delete').setAttribute('data-type', item.type);
        $newItem.querySelector('.product.actions .action.delete').setAttribute('data-id', item.id);

        $newItem.classList.remove('model');
        $newItem.classList.remove('hide');
    }
    var fnBuildMiniCart = function (data) {
        var cart = data.cart || {};
        var content = cart.content || [];
        var action = (content.length === 0 ? 'remove' : 'add');

        content.forEach(item => fnBuildMiniCartItem(item));
        document
            .querySelector('.minicart-items-wrapper .empty-cart')
            .classList[action]('hide');
    }
    var fnBuildCartResume = function (data) {
        var $qty = document.querySelector('.header-link.header-cart');
        $qty.querySelector('a .badge').innerHTML=data.cart.quantity;

        var $totalPrice = document.querySelector('.subtotal .price-container');
        $totalPrice.querySelector('.price-wrapper .price').innerHTML='R$ '+VMasker.toMoney(data.cart.total);
    }

    CanopusEventCenter.addListener('ServerDataLoader.Loaded', fnBuildLoggedInClientDetailsHeader);
    CanopusEventCenter.addListener('ServerDataLoader.Loaded', fnBuildMiniCart);
    CanopusEventCenter.addListener('ServerDataLoader.Loaded', fnBuildCartResume);

})(window);