<div class="dropdown-container right">
    <!-- minicart content -->
    <div class="block block-minicart">
        <div class="minicart-content-wrapper">
            <div class="block-title">
                <span>Itens do carrinho</span>
            </div>
            <a class="btn-minicart-close" title="Close">&#10060;</a>
            <div class="block-content">
                <div class="minicart-items-wrapper overflowed">
                    <ol class="minicart-items">
                        @include('components.menu.1.header-cart-minicart-wrapper-minicart-item')
                    </ol>
                    <h3 class="empty-cart hide">Carrinho vazio</h3>
                </div>
                <div class="subtotal">
                    <span class="label">
                        <span>Subtotal</span>
                    </span>
                    <div class="amount price-container">
                        <span class="price-wrapper"><span class="price">R$ 0,00</span></span>
                    </div>
                </div>
                <div class="actions">
                    <div class="secondary">
                        <a href="/checkout/cart" class="btn btn-alt">
                            <i class="icon icon-cart"></i><span>Ver o carrinho</span>
                        </a>
                    </div>
                    <div class="primary">
                        <a class="btn" href="/checkout/payment">
                            <i class="icon icon-external-link"></i><span>Ir para o pagamento</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /minicart content -->
</div>
